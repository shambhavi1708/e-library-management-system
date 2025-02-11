document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("toggleDark");
    const body = document.body;

    function updateIcon() {
        if (body.classList.contains("dark-theme")) {
            toggle.classList.remove("bi-brightness-high-fill");
            toggle.classList.add("bi-moon-fill");
        } else {
            toggle.classList.remove("bi-moon-fill");
            toggle.classList.add("bi-brightness-high-fill");
        }
    }

    toggle.addEventListener("click", function () {
        body.classList.toggle("dark-theme");
        localStorage.setItem("theme", body.classList.contains("dark-theme") ? "dark" : "light");
        updateIcon();
    });

    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        body.classList.add("dark-theme");
    }
    updateIcon();

    document.getElementById("accountForm").addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Account updated successfully!");
    });

    document.getElementById("passwordForm").addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Password changed successfully!");
    });

    document.getElementById("notificationForm").addEventListener("submit", function (e) {
        e.preventDefault();
        alert("Notification preferences updated!");
    });

    document.getElementById("deleteAccountBtn").addEventListener("click", function () {
        if (confirm("Are you sure? This action is irreversible.")) {
            alert("Account deleted.");
        }
    });

    function showSection(id) {
        document.querySelectorAll('.settings-section').forEach(section => {
            section.classList.remove("active");
        });
        document.getElementById(id).classList.add("active");
    }

    window.showSection = showSection;
});
