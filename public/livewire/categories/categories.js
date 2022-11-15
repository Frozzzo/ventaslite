const livewireEvents = () =>
{
  window.livewire.on('show-modal', msg => {
    const modal = new bootstrap.Modal(document.getElementById('modal'));
    modal.show();
  });
}

document.addEventListener('DOMContentLoaded', livewireEvents);