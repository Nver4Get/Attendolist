document.addEventListener("DOMContentLoaded", function () {
    const plusButtons = document.querySelectorAll(".plus-button");
    const today = new Date().getDay();
    console.log("Today is:", today);
    document.querySelectorAll(".plus-button").forEach((button) => {
        console.log("Button day:", button.getAttribute("data-day"));
    });
    plusButtons.forEach(function (button) {
        const buttonDay = parseInt(button.getAttribute("data-day"));
        if (buttonDay === today) {
            button.style.display = "inline-block";
        } else {
            button.style.display = "none";
        }
    });

    const deleteButtons = document.querySelectorAll(".deleteTaskButton");

    deleteButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            const taskGroupId = e.target.getAttribute("data-task-group");
            const taskGroup = document.getElementById(taskGroupId);

            if (taskGroup) {
                // Menghapus task dari tampilan
                taskGroup.remove();

                // Tambahkan task ke array hidden input 'deleted_tasks'
                let deletedTasksInput = document.querySelector(
                    '[name="deleted_tasks[]"]'
                );
                if (!deletedTasksInput) {
                    // Buat input hidden jika belum ada
                    let form = document.querySelector("form");
                    let hiddenInput = document.createElement("input");
                    hiddenInput.type = "hidden";
                    hiddenInput.name = "deleted_tasks[]";
                    hiddenInput.value = taskGroupId.replace("task-group-", ""); // Gunakan index task
                    form.appendChild(hiddenInput);
                }
            }
        });
    });

    const taskList = document.getElementById("task-list");

    // Add Task
    document.querySelectorAll(".addTaskButton").forEach((button) => {
        button.addEventListener("click", () => {
            const newTaskGroup = document.createElement("div");
            newTaskGroup.className = "task-group";
            newTaskGroup.innerHTML = `
                <div class="input-container mb-4">
                    <input type="text" class="form-control mb-2" name="tasks[]" placeholder="Task name">
                    <input type="text" class="form-control mb-2" name="progress[]" placeholder="Progress (%)">
                    <button type="button" class="btn btn-outline-secondary addTaskButton mb-2">+</button>
                    <button type="button" class="btn btn-outline-danger deleteTaskButton mb-2">Delete Task</button>
                </div>`;
            taskList.appendChild(newTaskGroup);
        });
    });

    // Delete Task
    document.addEventListener("click", (e) => {
        if (e.target.classList.contains("deleteTaskButton")) {
            const taskGroupId = e.target.dataset.taskGroup;
            const taskGroup = document.getElementById(taskGroupId);
            if (taskGroup) taskGroup.remove();
        }
    });

    document.querySelectorAll(".deleteTaskButton").forEach((button) => {
        button.addEventListener("click", function () {
            const taskId = this.getAttribute("data-task-id");
            const taskGroup = this.closest(".task-group");

            if (confirm("Are you sure you want to delete this task?")) {
                fetch(`/dashboard/${taskId}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": document
                            .querySelector('meta[name="csrf-token"]')
                            .getAttribute("content"),
                    },
                })
                    .then((response) => {
                        if (response.ok) {
                            // Remove task from UI
                            taskGroup.remove();
                            alert("Task deleted successfully.");
                        } else {
                            alert("Failed to delete the task.");
                        }
                    })
                    .catch((error) => console.error("Error:", error));
            }
        });
    });
});

const taskForm = document.getElementById("taskForm");
const addTaskButton = document.getElementById("addTaskButton");
const attendanceMessage = document.getElementById("attendanceMessage");
const reasonForm = document.getElementById("reasonForm");
const attendanceSelect = document.getElementById("attendanceSelect");
const submitButton = document.getElementById("submitButton");

document.addEventListener("DOMContentLoaded", function () {
    const addTaskButton = document.getElementById("addTaskButton");
    const taskForm = document.getElementById("taskForm");

    addTaskButton.addEventListener("click", function () {
        const newTaskGroup = document.createElement("div");
        newTaskGroup.className = "input-group mb-3";

        const newTaskInput = document.createElement("input");
        newTaskInput.type = "text";
        newTaskInput.className = "form-control";
        newTaskInput.name = "tasks[]"; // Store tasks as an array
        newTaskInput.placeholder = "Enter your task";

        const removeTaskButton = document.createElement("button");
        removeTaskButton.type = "button";
        removeTaskButton.className = "btn btn-outline-danger";
        removeTaskButton.textContent = "-";

        removeTaskButton.addEventListener("click", function () {
            newTaskGroup.remove();
        });

        newTaskGroup.appendChild(newTaskInput);
        newTaskGroup.appendChild(removeTaskButton);

        taskForm.appendChild(newTaskGroup);
    });
});

// Pengaturan tampilan berdasarkan status kehadiran
attendanceSelect.addEventListener("change", function () {
    if (attendanceSelect.value === "1") {
        attendanceMessage.style.display = "none";
        taskForm.style.display = "block";
        reasonForm.style.display = "none";
        submitButton.style.display = "block";
    } else if (attendanceSelect.value === "0") {
        attendanceMessage.style.display = "none";
        taskForm.style.display = "none";
        reasonForm.style.display = "block";
        submitButton.style.display = "block";
    } else {
        attendanceMessage.style.display = "block";
        taskForm.style.display = "none";
        reasonForm.style.display = "none";
        submitButton.style.display = "none";
    }
});
