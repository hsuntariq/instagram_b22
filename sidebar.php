<style>
.menu-container {
    width: 200px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 0.5rem 0;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

.menu-item {
    padding: 0.5rem 1.5rem;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    color: #000;
    text-decoration: none;
}

.menu-item i {
    margin-right: 0.75rem;
    font-size: 1.1rem;
}

.menu-item:hover {
    background-color: #f8f9fa;
}

.divider {
    border: none;
    border-top: 1px solid #ddd;
    margin: 0.25rem 0;
}

.logout {
    color: #dc3545;
}
</style>
<div class="min-vh-100 d-none d-md-flex flex-column justify-content-between p-4 ">
    <div class="top justify-content-between d-flex flex-column gap-4">
        <img class="d-none d-lg-block"
            src="https://logos-world.net/wp-content/uploads/2020/05/Instagram-Logo-2016-present.png" width="100px"
            alt="">

        <ul class="list-unstyled d-flex flex-column gap-4">
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-house-fill"></i>
                <h6 class="m-0 d-none d-lg-block">Home</h6>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-search"></i>
                <h6 class="m-0 d-none d-lg-block">Search</h6>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-compass"></i>
                <h6 class="m-0 d-none d-lg-block">Explore</h6>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-pause"></i>
                <h6 class="m-0 d-none d-lg-block">Reels</h6>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-chat"></i>
                <h6 class="m-0 d-none d-lg-block">Messages</h6>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-heart"></i>
                <h6 class="m-0 d-none d-lg-block">Notifications</h6>
            </div>
            <div class="d-flex create cursor-pointer gap-3 align-items-center">
                <i class="bi bi-plus-square"></i>
                <h6 class="m-0 d-none d-lg-block">Create</h6>
            </div>
            <a href="./profile.php" class="d-flex gap-3 align-items-center menu-item-profile"
                style="text-decoration:none;color:inherit;">
                <i class="bi bi-person-fill"></i>
                <h6 class="m-0 d-none d-lg-block">Profile</h6>
            </a>
        </ul>

    </div>
    <div class="bottom">
        <ul class="list-unstyled d-flex flex-column gap-4">
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-circle"></i>
                <h6 class="m-0 d-none d-lg-block">Meta AI</h6>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <i class="bi bi-threads"></i>
                <h6 class="m-0 d-none d-lg-block">Threads</h6>
            </div>
            <div class="d-flex more-btn cursor-pointer gap-3 align-items-center position-relative">
                <div class="menu-container d-none position-absolute" style="bottom:30px;">
                    <a href="#" class="menu-item"><i class="bi bi-gear"></i> Settings</a>
                    <a href="#" class="menu-item"><i class="bi bi-activity"></i> Your activity</a>
                    <a href="#" class="menu-item"><i class="bi bi-bookmark"></i> Saved</a>
                    <a href="#" class="menu-item"><i class="bi bi-brightness-high"></i> Switch appearance</a>
                    <a href="#" class="menu-item"><i class="bi bi-exclamation-circle"></i> Report a problem</a>
                    <hr class="divider">
                    <a href="#" class="menu-item"><i class="bi bi-person-switch"></i> Switch accounts</a>
                    <a href="./logout.php" class="menu-item logout"><i class="bi bi-box-arrow-right"></i> Log out</a>
                </div>
                <i class="bi bi-list"></i>
                <h6 class="m-0 d-none d-lg-block">More</h6>
            </div>
        </ul>
    </div>
</div>