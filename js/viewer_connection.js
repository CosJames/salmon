var start = 0, url = `http://1d8c13ca.ap.ngrok.io/salmon/php/viewer_loader.php`;
$(document).ready(function () {
  setInterval(load, 500);
  function load() {
    $.get(url + '?start=' + start, function(result) {
        if (result.items) {
          result.items.forEach(item => {
            start = item.id;
            $('#list').append(renderMessage(item));
        })
      };

    })
  } 

  function renderMessage(item) {
    return `
      <div style="background: whitesmoke; border: 1px solid gray; margin: 5px;">
        ${item.student}
        <img src="https://firebasestorage.googleapis.com/v0/b/salmon-d0360.appspot.com/o/LPSO563F.jpg?alt=media&token=abfc4574-b261-4f8a-9c0f-06076f933388">
      </div>
    `;

  }
});