document.addEventListener('DOMContentLoaded', function() {
    function setupModal(modalId, openBtnId, closeBtnId) {
        const modal = document.getElementById(modalId);
        const openBtn = document.getElementById(openBtnId);
        const closeBtn = document.getElementById(closeBtnId);

        function toggleModal() {
            modal.classList.toggle('hidden');
            document.body.style.overflow = modal.classList.contains('hidden') ? 'auto' : 'hidden';
        }

        openBtn.addEventListener('click', toggleModal);
        closeBtn.addEventListener('click', toggleModal);

        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                toggleModal();
            }
        });
    }

    setupModal("documentModalNinos", "openModal", "closeModal");
    setupModal("documentModalAdultos", "openModalAdultos", "closeModalAdultos");
});