(function () {
    var modal = document.getElementById('admin-image-modal');
    if (!modal) {
        return;
    }

    var closeBtn = modal.querySelector('.admin-image-modal-close');
    var triggers = document.querySelectorAll('.dashboard-user-trigger');

    function openModal() {
        modal.hidden = false;
        document.body.classList.add('admin-modal-open');
        closeBtn.focus();
    }

    function closeModal() {
        modal.hidden = true;
        document.body.classList.remove('admin-modal-open');
    }

    triggers.forEach(function (trigger) {
        trigger.addEventListener('click', openModal);
    });

    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !modal.hidden) {
            closeModal();
        }
    });
})();
