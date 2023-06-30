ClassicEditor
  .create(document.querySelector('.create'), {
    placeholder: 'Comece a escrever aqui...'
  })
  .then(editor => {

  })
  .catch(error => {
    console.error('Oops, something went wrong!');
    console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
    console.warn('Build id: 2vx08gcvmrpb-sao95dwge53k');
    console.error(error);
  });


ClassicEditor
  .create(document.querySelector('.edit'), {
    placeholder: 'Comece a escrever aqui...'
  })
  .then(editor => {
    editor.enableReadOnlyMode('edit');

    const toggleModeButton = document.querySelector('#toggleModeButton');
    const titleInput = document.querySelector('#input-title');

    const toggleMode = (event) => {
      if (editor.isReadOnly) {
        event.preventDefault();
        editor.disableReadOnlyMode('edit');
        toggleModeButton.textContent = "Salvar"
        titleInput.readOnly = false;
        toggleModeButton.type = "submit"
        toggleModeButton.classList.add('button-animation');
      }

    };

    toggleModeButton.addEventListener('click', toggleMode);
  })
  .catch(error => {
    console.error('Oops, something went wrong!');
    console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
    console.warn('Build id: 2vx08gcvmrpb-sao95dwge53k');
    console.error(error);
  });





