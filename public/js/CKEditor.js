ClassicEditor
  .create(document.querySelector('.create'), {
    placeholder: 'Comece a escrever aqui...'
  })

ClassicEditor
  .create(document.querySelector('.edit'), {
    placeholder: 'Comece a escrever aqui...'
  })
  .then(editor => {
    editor.enableReadOnlyMode('edit');
    const ckEditor = document.querySelector('.ck')
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
    ckEditor.addEventListener('click', toggleMode);
    titleInput.addEventListener('click', toggleMode);
    toggleModeButton.addEventListener('click', toggleMode);
  })



