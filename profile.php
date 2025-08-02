<?php
    session_start();
    if(!isset($_SESSION['ticket'])){
        header("Location: http://localhost:3000/sign-up.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Profile</title>
    <?php include './bootstrap.php'; ?>
    <style>
    .profile-avatar {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #e1306c;
    }

    .profile-section {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.07);
        padding: 2rem;
    }

    .profile-username {
        font-weight: 600;
        font-size: 1.5rem;
    }

    .profile-meta {
        font-size: 1rem;
        color: #888;
    }

    .profile-actions .btn {
        margin-right: 0.5rem;
    }

    @media (max-width: 768px) {
        .profile-section {
            padding: 1rem;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0">
                <?php include './sidebar.php'; ?>
            </div>
            <!-- Profile Content -->
            <div class="col-md-10 d-flex justify-content-center align-items-start pt-5">
                <div class="profile-section w-100 w-md-75 w-lg-50 mx-auto">


                    <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                        <?php 
                            include './config.php';
                            $user_id = $_SESSION['user_id'];
                            $user_image = "SELECT profile_image FROM users WHERE id = $user_id";
                            $result = mysqli_query($connection,$user_image);
                            foreach ($result as $value) {
                            if($value['profile_image'] == NULL){
                                    echo "<img src='https://cdn-icons-png.flaticon.com/256/3177/3177440.png' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage'
                            style='cursor:pointer;'>";
                            }else{
                                echo "<img src='./profile_images/{$value['profile_image']}' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage'";
                            }
                            
                            }
                        ?>

                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <span
                                    class="profile-username"><?php echo htmlspecialchars($_SESSION['ticket']); ?></span>
                                <a href="#" class="btn btn-outline-secondary btn-sm" id="editProfileBtn">Edit
                                    Profile</a>
                                <!-- Edit Profile Modal -->
                                <div class="modal fade" id="editProfileModal" tabindex="-1"
                                    aria-labelledby="editProfileModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form id="editProfileForm" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="mb-3 text-center">

                                                        <?php 
                                                include './config.php';
                                                $user_id = $_SESSION['user_id'];
                                                $user_image = "SELECT profile_image FROM users WHERE id = $user_id";
                                                $result = mysqli_query($connection,$user_image);
                                                foreach ($result as $value) {
                                                if($value['profile_image'] == NULL){
                                                        echo "<img src='https://cdn-icons-png.flaticon.com/256/3177/3177440.png' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage'
                                                style='cursor:pointer;'>";
                                                }else{
                                                    echo "<img src='./profile_images/{$value['profile_image']}' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage'";
                                                }
                                                
                                                }
                                        ?>



                                                        <!-- <img id="editImagePreview"
                                                            src=""
                                                            class="profile-avatar"
                                                            style="width:100px;height:100px;object-fit:cover;"
                                                            alt="Preview"> -->
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editImageInput" class="form-label">Profile
                                                            Image</label>
                                                        <input class="form-control" type="file" id="editImageInput"
                                                            accept="image/*">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editFullname" class="form-label">Full Name</label>
                                                        <input type="text" class="form-control" id="editFullname"
                                                            value="<?php echo htmlspecialchars($_SESSION['fullname']); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editUsername" class="form-label">Username</label>
                                                        <input type="text" class="form-control" id="editUsername"
                                                            value="<?php echo htmlspecialchars($_SESSION['ticket']); ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="editPassword" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="editPassword"
                                                            placeholder="Enter new password">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-secondary btn-sm">View Archive</a>
                                <i class="bi bi-gear" style="font-size:1.3rem;cursor:pointer;"></i>
                            </div>
                            <div class="d-flex gap-4 mb-2 profile-meta">
                                <span><strong>0</strong> posts</span>
                                <span><strong>1</strong> follower</span>
                                <span><strong>3</strong> following</span>
                            </div>
                            <div>
                                <strong><?php echo htmlspecialchars($_SESSION['fullname']); ?></strong>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column align-items-center justify-content-center"
                        style="min-height: 250px;">
                        <div class="mb-3">
                            <i class="bi bi-camera" style="font-size:2.5rem;"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Share Photos</h4>
                        <p class="text-secondary mb-3">When you share photos, they will appear on your profile.</p>
                        <a href="#" class="btn btn-primary">Share your first photo</a>
                    </div>
                    <!-- Profile Image Modal -->
                    <div class="modal fade" id="profileImageModal" tabindex="-1"
                        aria-labelledby="profileImageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="profileImageModalLabel">Change Profile Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form id="profileImageForm" enctype="multipart/form-data" method="POST"
                                    action='./update-image.php'>
                                    <div class="modal-body">
                                        <div class="mb-3 text-center">
                                            <img id="imagePreview"
                                                src="https://upload.wikimedia.org/wikipedia/commons/4/46/PrimeMinisterNawazSharif.jpg"
                                                class="profile-avatar"
                                                style="width:100px;height:100px;object-fit:cover;" alt="Preview">
                                        </div>
                                        <div class="mb-3">
                                            <input name='image' class="form-control" type="file" id="imageInput"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Link sidebar profile to profile.php
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarProfile = document.querySelectorAll('.bi-person-fill, .menu-item-profile');
        sidebarProfile.forEach(function(item) {
            item.style.cursor = 'pointer';
            item.addEventListener('click', function() {
                window.location.href = './profile.php';
            });
        });
        // Profile image modal logic
        var profileImage = document.getElementById('profileImage');
        var imageInput = document.getElementById('imageInput');
        var imagePreview = document.getElementById('imagePreview');
        var profileImageModal = new bootstrap.Modal(document.getElementById('profileImageModal'));

        profileImage.addEventListener('click', function() {
            profileImageModal.show();
        });

        imageInput && imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(ev) {
                    imagePreview.src = ev.target.result;
                }
                reader.readAsDataURL(file);
            }
        });



        // Edit Profile modal logic
        var editProfileBtn = document.getElementById('editProfileBtn');
        var editProfileModal = new bootstrap.Modal(document.getElementById('editProfileModal'));
        var editImageInput = document.getElementById('editImageInput');
        var editImagePreview = document.getElementById('editImagePreview');

        editProfileBtn.addEventListener('click', function(e) {
            e.preventDefault();
            editProfileModal.show();
        });

        editImageInput && editImageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(ev) {
                    editImagePreview.src = ev.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('editProfileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would handle the update via AJAX or form submit
            alert('Profile updated!');
            editProfileModal.hide();
            // Optionally update the main profile image and info
            profileImage.src = editImagePreview.src;
            document.querySelector('.profile-username').textContent = document.getElementById(
                'editUsername').value;
            document.querySelector('strong').textContent = document.getElementById('editFullname')
                .value;
        });
    });
    </script>
</body>

</html>