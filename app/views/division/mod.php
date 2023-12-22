<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <!-- đây là đoạn css cho search advance hay còn gọi là modal -->
    <style>
        .modal {
            display: none;
            /* Đặt mặc định modal không hiển thị */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
            /* display: flex; */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        /* Đặt vị trí của biểu tượng cog ở phía bên trái */
.advanced-search-icon-left {
    cursor: pointer;
    margin-right: 15px; /* Điều chỉnh khoảng cách giữa biểu tượng và thanh search */
}

    </style>




    <!-- icon search sẽ nằm đây -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!-- Thanh tìm kiếm -->
            <div class="search-container">
                <input type="text" class="form-control search" id="searchInput" placeholder="Search...">
            </div>
            <br>
            <!-- Hiển thị các tùy chọn đã chọn phía trên -->
            <div class="selected-options" id="selectedOptions"></div>
            <br>
            <!-- Các tùy chọn sẽ được hiển thị ở đây -->
            <div class="row">
                <div class="col-md-6">
                    <label>
                        <input type="checkbox" checked="check" name="option1" value="Option 1"> Tên BN
                    </label>
                </div>
                <div class="col-md-6">
                    <label>
                        <input type="checkbox" name="option2" value="Option 2"> Mã BN
                    </label>
                </div>
            </div>

        </div>
    </div>

    <div class="ms-md-auto pe-md-3 d-flex align-items-center search">
    <div class="input-group">
        <span class="input-group-text text-body search-icon">
            <i class="fas fa-search" aria-hidden="true"></i>
        </span>
        <input type="text" class="form-control search" id="searchInputMain" placeholder="Type here...">
    </div>
</div>

<!-- Biểu tượng cog ở phía bên trái -->
<span class="input-group-text text-body advanced-search-icon-left" id="advancedSearchIcon">
    <i class="fas fa-cog" aria-hidden="true"></i>
</span>


    <script>
        // Lấy tham chiếu đến biểu tượng tìm kiếm nâng cao và modal
        const advancedSearchIcon = document.getElementById("advancedSearchIcon");
        const modal = document.getElementById("myModal");

        // Lấy tham chiếu đến thanh tìm kiếm
        const searchInput = document.getElementById("searchInput");

        // Lấy tham chiếu đến phần tử hiển thị các tùy chọn đã chọn
        const selectedOptions = document.getElementById("selectedOptions");

        // Lấy tham chiếu đến modal content
        const modalContent = modal.querySelector(".modal-content");

        // Lấy danh sách tất cả các checkbox trong modal
        const checkboxes = modal.querySelectorAll("input[type='checkbox']");

        // Mảng để lưu trữ các tùy chọn đã chọn
        let selectedCheckboxes = [];

        // Đặt sự kiện click cho biểu tượng tìm kiếm nâng cao
        advancedSearchIcon.addEventListener("click", () => {
            // Hiển thị modal
            modal.style.display = "flex";

            // Lấy kích thước của modal
            const modalWidth = modal.offsetWidth;
            const modalHeight = modal.offsetHeight;

            // Lấy kích thước của màn hình
            const screenWidth = window.innerWidth;
            const screenHeight = window.innerHeight;

            // Tính toán vị trí trung tâm cho modal
            const leftPosition = (screenWidth - modalWidth) / 2 + "px";
            const topPosition = (screenHeight - modalHeight) / 2 + "px";

            // Đặt vị trí của modal
            modal.style.left = leftPosition;
            modal.style.top = topPosition;

            // Xóa hết dữ liệu trong mảng selectedCheckboxes
            selectedCheckboxes.forEach((checkbox) => {
                checkbox.checked = false;
            });
            selectedCheckboxes = [];
            updateSelectedOptions();
            // Xóa nội dung trong thanh tìm kiếm
            searchInput.value = "";
            // Hiển thị lại tất cả các dòng trong modal
            const rows = modalContent.querySelectorAll(".row");
            rows.forEach((row) => {
                row.style.display = "flex";
            });
        });

        // Đặt sự kiện click cho nút đóng modal và nút đóng modal (X)
        document.querySelector(".close").addEventListener("click", () => {
            modal.style.display = "none";
            // Xóa hết dữ liệu trong mảng selectedCheckboxes
            selectedCheckboxes.forEach((checkbox) => {
                checkbox.checked = false;
            });
            selectedCheckboxes = [];
            updateSelectedOptions();
            // Xóa nội dung trong thanh tìm kiếm
            searchInput.value = "";
            // Hiển thị lại tất cả các dòng trong modal
            const rows = modalContent.querySelectorAll(".row");
            rows.forEach((row) => {
                row.style.display = "flex";
            });
        });

        // Đặt sự kiện input cho thanh tìm kiếm
        searchInput.addEventListener("input", () => {
            const searchText = searchInput.value.toLowerCase();
            checkboxes.forEach((checkbox) => {
                const checkboxLabel = checkbox.parentElement.textContent.toLowerCase();
                const checkboxRow = checkbox.closest(".row");
                if (checkboxLabel.includes(searchText)) {
                    checkboxRow.style.display = "flex";
                } else {
                    checkboxRow.style.display = "none";
                    checkbox.checked = false;
                }
            });
            updateSelectedOptions();
        });

        // Đặt sự kiện keydown cho thanh tìm kiếm
        searchInput.addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                // Lấy giá trị từ thanh tìm kiếm
                const searchText = searchInputMain.value.toLowerCase();

                // Kiểm tra nếu thanh tìm kiếm không trống
             
                    window.location.href = `./table.php?search=${searchText}`;
              
            }
        });

        // Đặt sự kiện change cho mỗi checkbox để cập nhật nội dung phía trên
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", () => {
                updateSelectedOptions();
            });
        });

        // Hàm để cập nhật nội dung phía trên dựa trên các tùy chọn đã chọn
        function updateSelectedOptions() {
            selectedOptions.innerHTML = "";

            // Tạo một mảng để lưu trữ các tùy chọn đã chọn
            selectedCheckboxes = Array.from(checkboxes).filter((checkbox) => checkbox.checked);

            if (selectedCheckboxes.length > 0) {
                const ul = document.createElement("ul");
                selectedCheckboxes.forEach((checkbox) => {
                    const li = document.createElement("li");
                    li.textContent = checkbox.value;
                    ul.appendChild(li);
                });
                selectedOptions.appendChild(ul);
            }
        }
        // Lấy tham chiếu đến thanh tìm kiếm có placeholder là "typehere..."
        const searchInputMain = document.getElementById("searchInputMain");

        // Đặt sự kiện keydown cho thanh tìm kiếm
        searchInputMain.addEventListener("keydown", (event) => {
            if (event.key === "Enter") {
                // Lấy giá trị từ thanh tìm kiếm
                const searchText = searchInputMain.value.toLowerCase();

                // Kiểm tra nếu thanh tìm kiếm không trống
                if (searchText.trim() !== "") {
                    // Chuyển hướng đến trang "Employee.html" với tham số tìm kiếm
                    window.location.href = `./table.php?search=${searchText}`;
                } else {
                    // Nếu thanh tìm kiếm trống, bạn có thể hiển thị thông báo hoặc thực hiện hành động khác
                    alert("Vui lòng nhập từ khóa tìm kiếm trước khi ấn Enter.");
                }
            }
        });

    </script>



    <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0 login_logo">
                <i class="fa fa-user-tie me-sm-1" aria-hidden="true"></i>
                <span class="d-sm-inline d-none">Admin</span>
            </a>
        </li>
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="./login/login.php" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </a>
        </li>
        <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer setting Import text-dark"
                    aria-hidden="true"></i>
            </a>
       
    </ul>
</div>