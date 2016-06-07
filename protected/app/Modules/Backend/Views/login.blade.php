<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>{{trans('common.SITE_NAME').' - '.$title}}</title>
        <link rel="stylesheet" href="{!!URL::asset('public/backend/login/css/style.css')!!}">
    </head>
    <body>
        <div class="container">
            <section id="content">
                <form class="form-login" action="{{ url('/admin/login') }}" method="POST">
                    <h1>Đăng Nhập</h1>
                    <div>
                        <input type="text" placeholder="Email" id="email" name="email" />                        
                    </div>
                    <div>
                        <input type="password" placeholder="Mật khẩu" id="password" name="password"/>
                    </div>
                    <div>
                        <input type="submit" value="Đăng nhập" />
                        <label><input type="checkbox" name="remember" value="1"/> Nhớ tên đăng nhập</label>
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    </div>
                </form><!-- form -->
                <div class="button">
                    Rao vặt 365
                </div><!-- button -->
            </section><!-- content -->
        </div><!-- container -->
    </body>
</html>
