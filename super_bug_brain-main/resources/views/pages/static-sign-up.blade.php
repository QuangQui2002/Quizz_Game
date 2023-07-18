<x-layout bodyClass="">

    <div>
        <div class="container position-sticky z-index-sticky top-0">
            <div class="row">
                <div class="col-12">
                    <!-- Navbar -->
                    <x-navbars.navs.guest signin='static-sign-in' signup='static-sign-up'></x-navbars.navs.guest>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
        <main class="main-content  mt-0">
            <section>
                <div class="page-header min-vh-100">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                    style="background-image: url('{{ asset('assets') }}/img/illustrations/illustration-signup.jpg'); background-size: cover;">
                                </div>
                            </div>
                            <div
                                class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                                <div class="card card-plain">
                                    <div class="card-header">
                                        <h4 class="font-weight-bolder">Đăng ký</h4>
                                        <p class="mb-0">Nhập email và mật khẩu của bạn để đăng ký</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Tên đăng nhập</label>
                                                <input type="text" class="form-control" name="name" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Mật khẩu</label>
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                            <div class="form-check form-check-info text-start ps-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" checked>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Tôi đồng ý với các  <a href="javascript:;"
                                                        class="text-dark font-weight-bolder">Điều khoản và Điều kiện</a>
                                                </label>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Đăng ký</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Already have an account?
                                            <a href="{{ route('static-sign-in') }}"
                                                class="text-primary text-gradient font-weight-bold">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-layout>
