

        function add() {
            // Lấy thông tin từ các trường input
            var dienthoai = document.getElementById("dienthoai").value;
            var hovaten = document.getElementById("hovaten").value;
            var ngaysinh = document.getElementById("ngaysinh").value;
            var quoctich = document.getElementById("quoctich").value;
            var gioitinh = document.querySelector('input[name="gioitinh"]:checked').value;
            var email = document.getElementById("email").value;
            var diachi = document.getElementById("diachi").value;
            var TP = document.getElementById("TP").value;
            var QH = document.getElementById("Q/H").value;
            var PX = document.getElementById("P/X").value;
            var cmnd = document.getElementById("cmnd").value;

            // Lưu thông tin vào localStorage
            localStorage.setItem("dienthoai", dienthoai);
            localStorage.setItem("hovaten", hovaten);
            localStorage.setItem("ngaysinh", ngaysinh);
            localStorage.setItem("quoctich", quoctich);
            localStorage.setItem("gioitinh", gioitinh);
            localStorage.setItem("email", email);
            localStorage.setItem("diachi", diachi);
            localStorage.setItem("TP", TP);
            localStorage.setItem("QH", QH);
            localStorage.setItem("PX", PX);
            localStorage.setItem("cmnd", cmnd);
        }

        function exportToPDF() 
        {
           print();
            // // Lấy thông tin từ localStorage
            // var dienthoai = localStorage.getItem("dienthoai");
            // var hovaten = localStorage.getItem("hovaten");
            // var ngaysinh = localStorage.getItem("ngaysinh");
            // var quoctich = localStorage.getItem("quoctich");
            // var gioitinh = localStorage.getItem("gioitinh");
            // var email = localStorage.getItem("email");
            // var diachi = localStorage.getItem("diachi");
            // var TP = localStorage.getItem("TP");
            // var QH = localStorage.getItem("QH");
            // var PX = localStorage.getItem("PX");
            // var cmnd = localStorage.getItem("cmnd");

            // // Tạo nội dung PDF
            // var content = "Số di động: " + dienthoai + "\n";
            // content += "Họ và tên: " + hovaten + "\n";
            // content += "Ngày sinh: " + ngaysinh + "\n";
            // content += "Quốc tịch: " + quoctich + "\n";
            // content += "Giới tính: " + gioitinh + "\n";
            // content += "Email: " + email + "\n";
            // content += "Địa chỉ: " + diachi + "\n";
            // content += "Thành phố: " + TP + "\n";
            // content += "Quận/Huyện: " + QH + "\n";
            // content += "Phường/Xã: " + PX + "\n";
            // content += "Số CMND/CCCD/PASSPORT: " + cmnd + "\n";

            // // Tạo đối tượng jsPDF
            // var doc = new jsPDF();

            // // Thêm nội dung vào PDF
            // doc.fromHTML($('body').html(), 15, 15, {
            //     'width': 170, 
            //   });

            // // Xuất PDF
            // doc.output();
        }

     
        