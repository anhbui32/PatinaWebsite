@extends('layouts.client2')
@section('content')
    <!-- Products -->
    <section class="container pt-5">
        <div class="row">
            <!-- Left -->
            <div class="col-xl-3">
                <!-- Filter Price -->
                <div>
                    <h5 class="bg-filter p-2 mt-2">Lọc theo giá</h5>
                    <ul class="py-2 px-1">
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">Dưới $500</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">$500 - $999</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">$1000 - $1999</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">$2000 - $3999</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">$4000 - $4999</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between "><a href="#"
                                class="nav-link select-filter">Over $5000</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                    </ul>
                </div>
                <!-- Lọc theo danh mục -->
                <div>
                    <h5 class="bg-filter p-2 mt-2">Lọc theo danh mục</h5>
                    <ul class="py-2 px-1">
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">Áo</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">Quần</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">Bộ quần áo</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="d-flex align-items-center justify-content-between"><a href="#"
                                class="nav-link select-filter">Giày</a>
                            <p style="font-size: var(--font-size); margin: 0;" class="amout">24</p>
                        </li>
                        <li class="nav-link">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item border-0 show">
                                    <div>
                                        <a class="text-decoration-none p-0"
                                            style="font-size: large; color: var(--secondary-1200-color);"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                            aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Phụ kiện
                                        </a>
                                        <img src="" alt="">
                                    </div>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body p-0">
                                            <ul>
                                                <li class="nav-link"><a style="font-size: large;" class="nav-link"
                                                        href="">Ví</a></li>
                                                <li class="nav-link"><a style="font-size: large;" class="nav-link"
                                                        href="">Tất</a></li>
                                                <li class="nav-link"><a style="font-size: large;" class="nav-link"
                                                        href="">Mũ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Filter by Brand -->
                <div class="brand">
                    <h5 class="bg-filter p-2 mt-2">Lọc theo thương hiệu</h5>
                    <div class="container-fluid px-0 py-2">
                        <div class="row g-2">
                            <div class="col-4 item-brand">
                                <img class="object-fit-contain img-thumbnail w-100 h-100"
                                    src="/assets/clients/img/Logo_bran/SWE.png" alt="">
                            </div>
                            <div class="col-4 item-brand">
                                <a href="">
                                    <img class="object-fit-contain img-thumbnail w-100 h-100"
                                        src="/assets/clients/img/Logo_bran/BAMA.png" alt="">
                                </a>
                            </div>
                            <div class="col-4 item-brand">
                                <a href="">
                                    <img class="object-fit-contain img-thumbnail w-100 h-100"
                                        src="/assets/clients/img/Logo_bran/Hades.png" alt="">
                                </a>
                            </div>
                            <div class="col-6 item-brand">
                                <a href="">
                                    <img class="object-fit-contain img-thumbnail w-100 h-100"
                                        src="/assets/clients/img/Logo_bran/BOBUI.png" alt="">
                                </a>
                            </div>
                            <div class="col-6 item-brand">
                                <a href="">
                                    <img class="object-fit-contain img-thumbnail w-100 h-100"
                                        src="/assets/clients/img/Logo_bran/adidas.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Popular Product  -->
                <div class="popular">
                    <h5 class="bg-filter p-2 mt-2">Sản phẩm phổ biến</h5>
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="d-flex my-1" style="height: 90px;">
                                <img class="img-thumbnail w-25"
                                    src="/assets/clients/img/Products/Shirt/AoThunOverSizeRetro9AS.jpg" alt="">
                                <div class="mx-2">
                                    <h6>Product</h6>
                                    <p style="font-size: var(--font-size); margin: 0;">$60.</p>
                                </div>
                            </div>
                            <div class="d-flex" style="height: 90px;">
                                <img class="img-thumbnail w-25"
                                    src="/assets/clients/img/Products/Shirt/AoThunOverSizeRetro9AS.jpg" alt="">
                                <div class="mx-2">
                                    <h6>Product</h6>
                                    <p style="font-size: var(--font-size); margin: 0;">$60.</p>
                                </div>
                            </div>
                            <div class="d-flex my-1" style="height: 90px;">
                                <img class="img-thumbnail w-25"
                                    src="/assets/clients/img/Products/Shirt/AoThunOverSizeRetro9AS.jpg" alt="">
                                <div class="mx-2">
                                    <h6>Product</h6>
                                    <p style="font-size: var(--font-size); margin: 0;">$60.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Right -->
            <div class="col-xl-9 container-fluid">
                <div class="d-flex flex-column flex-xl-row ">
                    <div class="col-9">
                        <p style="margin: 0; font-size: 18px;">Showing 1-12 of 14 results</p>
                    </div>
                    <div class="col-3 dropdown d-flex justify-content-start justify-content-xl-end">
                        <button class="btn rounded dropdown-toggle p-0 p-xl-2" style="font-size: 18px;" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sort by lastest
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Giá từ thấp đến cao</a></li>
                            <li><a class="dropdown-item" href="#">Giá từ cao đến thấp</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Products -->
                <div class="container-fluid p-0">
                    <div class="row g-2">
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge text-bg-danger fs-6">- 20%</span>
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0;"
                                    class="text-decoration-line-through text-danger mx-2">$200</p>
                                <p style="font-size: var(--font-size); margin: 0; color: black;">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge text-bg-dark fs-6">New</span>
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: black;">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: var(--primary-800-color); color:white"
                                        class="fas fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: black;">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge text-bg-danger fs-6">- 20%</span>
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0;"
                                    class="text-decoration-line-through text-danger mx-2">$200</p>
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge text-bg-dark fs-6">New</span>
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: var(--primary-800-color); color:white"
                                        class="fas fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge text-bg-danger fs-6">- 20%</span>
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0;"
                                    class="text-decoration-line-through text-danger mx-2">$200</p>
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge text-bg-dark fs-6">New</span>
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: var(--primary-800-color); color:white"
                                        class="fas fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 position-relative d-flex flex-wrap flex-column align-items-center">
                            <img class="img-thumbnail"
                                src="/assets/clients/img/Products/Shirt/HadesNewBalanceLongSleeve.webp" alt="">
                            <div class="position-absolute top-0 p-3 w-100 end-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <i style="border: 0.5px solid var(--primary-800-color); background-color: white; color:var(--primary-800-color)"
                                        class="fa-regular fa-heart rounded-5 p-2 fs-5"></i>
                                </div>
                            </div>
                            <h4 class="pt-1 mt-1 fs-5">Products Name</h4>
                            <p style="font-size: 16px; color:#000516A4; margin: 0;">Shirt</p>
                            <div class="d-flex">
                                <p style="font-size: var(--font-size); margin: 0; color: var(--primary-1200-color);">$160
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center ps-xl-0 ps-5">
                    <div style="width: 9%;"></div>
                    <div>
                        <button style="background-color:#5F2D00C9;" class="btn m-2"><span
                                class="text-white">1</span></button>
                        <button style="border: 3px solid #5F2D00C9;" class="btn"><span>2</span></button>
                    </div>
                    <div class="d-flex align-items-center p-1 rounded" style="border: 3px solid #5F2D00C9; height: 35px;">
                        <button class="btn rounded" style="font-weight: var(--Bold); font-size: 18px;">Next</button><i
                            class="fa-solid fa-angle-right me-2"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Flash Sales -->
    <section class="container my-5">
        <div class="p-xl-5 p-3" style="background-color:#F7F2EE; ">
            <div class="d-flex flex-column flex-xl-row p-0 p-xl-5 bg-white w-100">
                <!-- Left -->
                <div class="col-xl-6 col-12">
                    <div class="container pt-3 pt-xl-0">
                        <span class="badge px-3 py-2 fs-4 text-bg-danger">- 20%</span>
                        <div class="py-5">
                            <h1>New Collection</h1>
                            <p style="color: var(--secondary-1000-color); font-size: 18px;">Introducing our luxurious
                                Harmony Chair – a perfect blend of comfort and style for your
                                living space.</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <div class="d-flex flex-column border py-2 align-items-center time-flash-sales"
                                style="width: 7rem; background-color: #F7F2EE; color: black;">
                                <h3 id="days"></h3>
                                <p>Days</p>
                            </div>
                            <div class="d-flex flex-column border py-2 align-items-center time-flash-sales"
                                style="width: 7rem; background-color: #F7F2EE; color: black;">
                                <h3 id="hours"></h3>
                                <p>Hours</p>
                            </div>
                            <div class="d-flex flex-column border py-2 align-items-center time-flash-sales"
                                style="width: 7rem; background-color: #F7F2EE; color: black;">
                                <h3 id="minutes"></h3>
                                <p>Minutes</p>
                            </div>
                            <div class="d-flex flex-column border py-2 align-items-center time-flash-sales"
                                style="width: 7rem; background-color: #F7F2EE; color: black;">
                                <h3 id="seconds"></h3>
                                <p>Seconds</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right -->
                <div class="col-12 col-xl-6 d-flex justify-xl-content-end justify-content-center">
                    <img class="w-75" src="/assets/clients/img/Image-banner.png" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
