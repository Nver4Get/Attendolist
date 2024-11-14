document.addEventListener('DOMContentLoaded', function() {
    const plusButtons = document.querySelectorAll('.plus-button');
    const today = new Date().getDay();

    // Menampilkan tombol plus hanya pada hari saat ini
    plusButtons.forEach(function(button) {
        const buttonDay = parseInt(button.getAttribute('data-day'));
        if (buttonDay !== today) {
            button.style.display = 'none';
        } else {
            button.style.display = 'inline-block';
        }
    });
});

const taskForm = document.getElementById('taskForm');
const addTaskButton = document.getElementById('addTaskButton');
const attendanceMessage = document.getElementById('attendanceMessage');
const reasonForm = document.getElementById('reasonForm');
const attendanceSelect = document.getElementById('attendanceSelect');
const submitButton = document.getElementById('submitButton');

addTaskButton.addEventListener('click', function() {
    // Buat elemen input baru untuk task
    const newTaskGroup = document.createElement('div');
    newTaskGroup.className = 'input-group mb-3';

    // Input untuk task
    const newTaskInput = document.createElement('input');
    newTaskInput.type = 'text';
    newTaskInput.className = 'form-control';
    newTaskInput.name = 'tasks[]';
    newTaskInput.placeholder = 'Enter your task';

    // Input untuk progress
    const newProgressInput = document.createElement('input');
    newProgressInput.type = 'text';
    newProgressInput.className = 'form-control';
    newProgressInput.name = 'progress[]';
    newProgressInput.placeholder = 'Enter progress for this task';
    newProgressInput.disabled = true; // Progress disabled by default

    // Tombol untuk menghapus task
    const removeTaskButton = document.createElement('button');
    removeTaskButton.type = 'button';
    removeTaskButton.className = 'btn btn-outline-danger';
    removeTaskButton.textContent = '-';

    // Event listener untuk tombol hapus
    removeTaskButton.addEventListener('click', function() {
        newTaskGroup.remove();
    });

    // Tambahkan input task, progress dan tombol hapus ke dalam grup baru
    newTaskGroup.appendChild(newTaskInput);
    newTaskGroup.appendChild(newProgressInput);
    newTaskGroup.appendChild(removeTaskButton);

    // Tambahkan grup baru ke dalam taskForm
    taskForm.appendChild(newTaskGroup);
});

// Pengaturan tampilan berdasarkan status kehadiran
attendanceSelect.addEventListener('change', function() {
    if (attendanceSelect.value === "1") {
        attendanceMessage.style.display = 'none';
        taskForm.style.display = 'block';
        reasonForm.style.display = 'none';
        submitButton.style.display = 'block';
    } else if (attendanceSelect.value === "0") {
        attendanceMessage.style.display = 'none';
        taskForm.style.display = 'none';
        reasonForm.style.display = 'block';
        submitButton.style.display = 'block';
    } else {
        attendanceMessage.style.display = 'block';
        taskForm.style.display = 'none';
        reasonForm.style.display = 'none';
        submitButton.style.display = 'none';
    }
});
