const livewireEvents = () =>
{
  window.livewire.on('show-modal', msg => {
    const modal = new bootstrap.Modal(document.getElementById('modal'));
    modal.show();
  });

  window.livewire.on('category-added', msg =>{
    const modal =  bootstrap.Modal.getInstance(document.getElementById('modal'));
    modal.hide();
  });

  window.livewire.on('category-updated', msg =>{
    const modal =  bootstrap.Modal.getInstance(document.getElementById('modal'));
    modal.hide();
  });
}

document.addEventListener('DOMContentLoaded', livewireEvents);