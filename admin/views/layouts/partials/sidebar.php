<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/Du_ANONE/admin/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-user"></i>
            <span>Quản lý Người đùng</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=users">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=user-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true" aria-controls="collapsePost">
            <i class="fab fa-apple"></i>
            <span>Quản lý Bài viết</span>
        </a>
        <div id="collapsePost" class="collapse" aria-labelledby="headingPost" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=posts">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=post-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseproduct" aria-expanded="true" aria-controls="collapseproduct">
            <i class="fab fa-apple"></i>
            <span>Quản lý Sản phẩm</span>
        </a>
        <div id="collapseproduct" class="collapse" aria-labelledby="headingproduct" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=products">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=product-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fab fa-apple"></i>
            <span>Quản lý tag</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=tags">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=tag-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
            <i class="fab fa-apple"></i>
            <span>Quản lý Danh mục sản phẩm</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=categories">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=category-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
            <i class="fab fa-apple"></i>
            <span>Quản lý đơn  hàng</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=orders">Danh sách</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
            <i class="fab fa-apple"></i>
            <span>Quản lý author</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=authors">Danh sách</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=author-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Setting -->
    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL_ADMIN . '?act=setting-form' ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Setting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>