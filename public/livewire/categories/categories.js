const livewireEvents = () =>
{
  window.livewire.on('show-modal', msg => {
    const modal = new bootstrap.Modal(document.getElementById('modal'));
    modal.show();
  });

  window.livewire.on('category-added', msg => {
    const modal =  bootstrap.Modal.getInstance(document.getElementById('modal'));
    modal.hide();
  });

  window.livewire.on('category-updated', msg => {
    const modal =  bootstrap.Modal.getInstance(document.getElementById('modal'));
    modal.hide();
  });
}

const Confirm = (id, cantidadProductos) =>
{
  if(Number(cantidadProductos) >= 1)
  {
    alertify.alert(
      '¡Atención!', 
      `No es posible eliminar la categoría dado que tiene ${cantidadProductos} productos asociados!`, 
      () => { alertify.success('Ok'); })
      .set('labels', {ok: 'Entendido'});
  }else{
    alertify.confirm(
      '¿Deseas eliminar la Categoría?',
      'Se eliminará la categoría', 
      () => { 
        window.livewire.emit('delete-row', id);
        alertify.success('Eliminado');
      },
      () => { alertify.error('Cancelado')})
      .set('labels', {
        ok: 'Eliminar',
        cancel: 'Cancelar'
      });  
  }    
}

document.addEventListener('DOMContentLoaded', livewireEvents);