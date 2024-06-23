<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Domisili;
use App\Models\Keahlian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;

class AuthController extends Controller
{
    public function indexLogin()
    {
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        return view('user.auth.login', [
            'domisili' => $domisili,
            'keahlian' => $keahlian

        ]);
    }

    public function indexRegister()
    {
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        return view('user.auth.register', [
            'domisili' => $domisili,
            'keahlian' => $keahlian

        ]);
    }

    public function indexProfil()
    {
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        return view('user.auth.profil', [
            'domisili' => $domisili,
            'keahlian' => $keahlian

        ]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'

        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->role == 'admin') {
                Auth::logout();
                return redirect('/user/login')->with('error', 'Login gagal, email atau password salah');
            } else {
                return redirect('/')->with('login', 'Login berhasil');
            }
        }

        return redirect('/user/login')->with('error', 'Login gagal, email atau password salah');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'repassword' => 'required|same:password', // tambahkan ini
            'no_hp' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'repassword.required' => 'Password harus diisi',
            'no_hp.required' => 'No HP harus diisi',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->no_hp = $request->no_hp;
        $user->save();

        return redirect('/user/login')->with('register', 'Data berhasil ditambahkan');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('logout', 'Logout berhasil');
    }

    public function updateProfil(Request $request)
    {
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email,' . Auth::user()->id,
                'no_hp' => 'required',
                'password' => 'required',
                'repassword' => 'required|same:password',
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah terdaftar',
                'no_hp.required' => 'No HP harus diisi',
                'password.required' => 'Password harus diisi',
                'repassword.required' => 'Password harus diisi',
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email,' . Auth::user()->id,
                'no_hp' => 'required',
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah terdaftar',
                'no_hp.required' => 'No HP harus diisi',
            ]);
        }

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->no_hp = $request->no_hp;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('/user/profil')->with('updateprofil', 'Profil berhasil diupdate');
    }

    public function linkresetpassword()
    {
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        return view('user.auth.reset-password', [
            'domisili' => $domisili,
            'keahlian' => $keahlian

        ]);
    }

    public function changepassword($code)
    {
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        $user = User::where('code', $code)->where('status_code', 'aktif')->where('role', 'user')->first();
        if ($user) {
            return view('user.auth.change-password', [
                'user' => $user,
                'domisili' => $domisili,
                'keahlian' => $keahlian
            ]);
        } else {
            return redirect('/')->with('linkkadaluarsa', 'Reset Password Gagal');
        }
    }

    public function changepasswordpost(Request $request)
    {
        $user = User::where('code', $request->code)->where('status_code', 'aktif')->where('role', 'user')->first();
        $request->validate([
            'password' => [
                'required',
            ],
            'repassword' => 'required|same:password'
        ], [
            'password.required' => 'Password tidak boleh kosong',
            'repassword.required' => 'Password tidak boleh kosong',
            'repassword.same' => 'Password tidak sama',
        ]);

        $user->password = bcrypt($request->password);
        $user->code = null;
        $user->status_code = "tidak_aktif";
        $user->save();

        return redirect('/')->with('resetpasswordberhasil', 'Reset Password Berhasil');
    }

    public function sendlinkresetpassword(Request $request)
    {
        $request->validate([
            'email' => ['required'],
        ], [
            'email.required' => 'Email tidak boleh kosong',
        ]);

        $user = User::where('email', $request->email)->where('role', 'user')->first();

        if ($user) {
            try {
                $mail = new PHPMailer(true);

                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'monza.id.domainesia.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'rentcar@kaliansenang.my.id';                     //SMTP username
                $mail->Password   = 'Gituajamarah#23';                               //SMTP password
                $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                $mail->Port       = 465;                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('rentcar@kaliansenang.my.id', 'Admin');
                $mail->addAddress($request->email);     //Add a recipient

                $Code = substr((str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ")), 0, 10);

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Password Reset';
                $mail->Body    = 'To reset your password, please click the link below:<br><br><a href="http://127.0.0.1:8000/user/reset-password/' . $Code . '">Reset Password</a>';
                $updatecode = User::where('email', $request->email)->first();
                $updatecode->code = $Code;
                $updatecode->status_code = 'aktif';
                $updatecode->save();

                $mail->send();

                return redirect('/user/reset-password')->with('linkresetpassword', 'Link reset password telah dikirim ke email');
            } catch (Exception $e) {
            }
        } else {
            return redirect()->back()->with('emailtidakditemukan', 'Email tidak ditemukan');
        }
    }
}
