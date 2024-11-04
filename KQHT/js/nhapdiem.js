
const fileInput = document.getElementById('file-upload');
const fileList = document.getElementById('file-list');
const fileViewer = document.getElementById('file-viewer');
const saveButton = document.getElementById('save-button');
const deleteButton = document.getElementById('delete-button');

let files = []; // Mảng lưu trữ tệp

// Tải tệp từ LocalStorage khi trang tải lại
window.onload = function() {
    const savedFiles = JSON.parse(localStorage.getItem('savedFiles')) || [];
    if (savedFiles.length > 0) {
        files = savedFiles;
        renderFileList();
        saveButton.disabled = false;
        deleteButton.disabled = false;
    }
};

// Xử lý khi người dùng chọn tệp
fileInput.addEventListener('change', function() {
    fileList.innerHTML = ""; // Xóa danh sách tệp cũ
    fileViewer.innerHTML = ""; // Xóa phần hiển thị tệp trước

    files = Array.from(this.files);
    renderFileList();
    saveButton.disabled = false;
    deleteButton.disabled = false;
});

// Hàm hiển thị danh sách tệp
function renderFileList() {
    fileList.innerHTML = ""; // Xóa danh sách cũ
    files.forEach((file, index) => {
        const fileItem = document.createElement('div');
        fileItem.classList.add('file-item');

        // Tạo URL từ tệp
        let fileURL = file.url ? file.url : URL.createObjectURL(file);

        // Tạo liên kết để hiển thị tệp
        const fileLink = document.createElement('a');
        fileLink.textContent = file.name;
        fileLink.href = "#";
        fileLink.onclick = function(e) {
            e.preventDefault(); // Ngăn việc mở liên kết
            displayFile(file, fileURL); // Hiển thị tệp
        };

        // Tạo checkbox để chọn tệp để xóa
        const fileCheckbox = document.createElement('input');
        fileCheckbox.type = "checkbox";
        fileCheckbox.classList.add('file-checkbox');
        fileCheckbox.dataset.index = index;

        fileItem.appendChild(fileCheckbox);
        fileItem.appendChild(fileLink);
        fileList.appendChild(fileItem);
    });
}

// Hàm hiển thị tệp
function displayFile(file, fileURL) {
    fileViewer.innerHTML = ""; // Xóa nội dung trước

    if (file.type.startsWith('image/')) {
        const img = document.createElement('img');
        img.src = fileURL;
        img.alt = file.name;
        img.style.maxWidth = '100%';
        fileViewer.appendChild(img);
    } else if (file.type === 'application/pdf') {
        const iframe = document.createElement('iframe');
        iframe.src = fileURL;
        iframe.style.width = '100%';
        iframe.style.height = '600px';
        fileViewer.appendChild(iframe);
    } else if (file.type === 'text/plain') {
        const iframe = document.createElement('iframe');
        iframe.src = fileURL;
        iframe.style.width = '100%';
        iframe.style.height = '600px';
        fileViewer.appendChild(iframe);
    } else {
        const downloadLink = document.createElement('a');
        downloadLink.href = fileURL;
        downloadLink.download = file.name;
        downloadLink.textContent = `Tải xuống ${file.name}`;
        fileViewer.appendChild(downloadLink);
    }
}

// Xử lý khi người dùng bấm "Lưu"
saveButton.addEventListener('click', function() {
    const filesToSave = files.map(file => {
        return {
            name: file.name,
            type: file.type,
            url: file.url ? file.url : URL.createObjectURL(file) // Lưu URL của tệp vào LocalStorage
        };
    });
    localStorage.setItem('savedFiles', JSON.stringify(filesToSave));
    alert('Dữ liệu đã được lưu!');
});

// Xử lý khi người dùng bấm "Xóa"
deleteButton.addEventListener('click', function() {
    const checkboxes = document.querySelectorAll('.file-checkbox:checked');
    checkboxes.forEach(checkbox => {
        const index = checkbox.dataset.index;
        files.splice(index, 1); // Xóa tệp khỏi mảng

        // Cập nhật giao diện
        checkbox.parentElement.remove();
    });

    // Cập nhật LocalStorage sau khi xóa
    const filesToSave = files.map(file => {
        return {
            name: file.name,
            type: file.type,
            url: file.url ? file.url : URL.createObjectURL(file)
        };
    });
    localStorage.setItem('savedFiles', JSON.stringify(filesToSave));

    // Nếu không còn tệp nào, vô hiệu hóa nút Lưu và Xóa
    if (files.length === 0) {
        saveButton.disabled = true;
        deleteButton.disabled = true;
    }

    // Xóa nội dung hiển thị
    fileViewer.innerHTML = "";
});