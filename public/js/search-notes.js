async function searchNotes() {
    var searchTerms = $('#search-note').val();
    if (searchTerms == '') {
        searchTerms = 'vazio';
    }

    try {
        const response = await fetch(`/?search=${encodeURIComponent(searchTerms)}`);
        const data = await response.json();
        const notesContainer = $('#notes-container');

        notesContainer.fadeOut(200, function () {
            notesContainer.empty();
            if (data.length === 0) {
                notesContainer.append('<p class="no-notes-text">Nenhuma nota encontrada.</p>');
            } else {
                data.forEach(function (note) {
                    var noteCard = `
              <div class="col" style="display: none;">
                <div class="note-card">
                  <h2 class="note-title">${note.title}</h2>
                  <p class="note-date">${note.date}</p>
                  <p class="note-content">${note.content}</p>
                  <a href="notes/${note.id}" class="note-overlay"></a>
                </div>
              </div>
            `;
                    notesContainer.append(noteCard);
                });
            }
            notesContainer.fadeIn(200, function () {
                notesContainer.find('.col:hidden').each(function (index) {
                    $(this).delay(index * 100).slideDown(150);
                });
            });
        });
    } catch (error) {
        console.log(error);
    }
}

let searchTimeout;

$('#search-note').on('keyup', function () {
    clearTimeout(searchTimeout);
    searchTimeout = setTimeout(searchNotes, 500);
});
