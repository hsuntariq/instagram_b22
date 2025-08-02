<style>
.post-underlay {
    background-color: rgba(0, 0, 0, 0.6);
}

.post-box {
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    height: 70vh;
}

.icon-container {
    font-size: 2rem;
}

.btn-custom {
    background-color: #1DA1F2;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
}

.hide-textarea {
    width: 0;
    transition: all 0.7s;
    overflow: hidden;
}

.btn-custom:hover {
    background-color: #1a91da;
}


.post-section {
    transition: all 0.7s;
}
</style>

<div class="post-underlay d-none min-vh-100 w-100 z-3 position-fixed top-0">
    <form action="./upload-post.php" method="POST" enctype="multipart/form-data"
        class="position-absolute col-xl-6 col-lg-7 col-md-8 col-10 top-50 start-50 translate-middle bg-white py-4 post-box text-center position-relative">
        <i class="bi bi-arrow-left position-absolute cursor-pointer b-arrow d-none" style="left:10px"></i>
        <h6 class="next-btn m-0 position-absolute cursor-pointer d-none text-primary" style="right:10px"> Next</h6>
        <button
            class="next-btn2 bg-transparent border-0 p-0 fw-semibold m-0 position-absolute cursor-pointer d-none text-primary"
            style="right:10px"> Share
        </button>

        <h5 class="modal-heading">Create new post</h5>

        <div class="d-flex" style="height:85%">

            <div style="width:100%" class="d-flex post-section flex-column justify-content-center align-items-center">
                <img width="100%" height="100%"
                    src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.jpg?s=612x612&w=0&k=20&c=A63koPKaCyIwQWOTFBRWXj_PwCrR4cEoOw2S9Q7yVl8="
                    class="preview-image object-fit-cover d-none" alt="">
                <video controls width="100%" height="100%"
                    src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.jpg?s=612x612&w=0&k=20&c=A63koPKaCyIwQWOTFBRWXj_PwCrR4cEoOw2S9Q7yVl8="
                    class="preview-video object-fit-cover d-none" alt=""></video>
                <div class="content-modal">

                    <div class="icon-container my-4">
                        <span class="me-2"><i class="bi bi-image"></i></span>
                        <span><i class="bi bi-play-circle"></i></span>
                    </div>
                    <p class="mb-4">Drag photos and videos here</p>
                    <input type="file" class="d-none choose-post" name="image" id="image">
                    <label for="image" class="btn btn-custom">Select from computer</label>

                </div>
            </div>

            <div class="caption-section position-relative mx-2 hide-textarea">
                <i class="bi bi-arrow-left position-absolute cursor-pointer b-arrow2 d-none" style="left:10px"></i>

                <div class="d-flex gap-3 align-items-center">
                    <i class="bi bg-secondary-subtle d-flex justify-content-center align-items-center bi-person rounded-circle"
                        style="width: 40px;height:40px"></i>
                    <h6>
                        <?php echo $_SESSION['ticket']?>
                    </h6>
                </div>
                <textarea name="caption" class="form-control my-3 border-0" rows="10" placeholder="Caption..."
                    style="resize: none;" id=""></textarea>

            </div>


        </div>
    </form>
</div>