<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
        <h2>Modal Header</h2>
        <span class="close">&times;</span>
    </div>
    <div class="modal-body">
      <p class="modal-body-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe doloremque quo eius incidunt consequatur harum. Esse eum veniam a error assumenda dolores beatae quaerat neque maiores modi officiis eaque, cum recusandae necessitatibus provident et, iusto nihil aliquid magnam perferendis libero dolor repudiandae. Velit aperiam vel veritatis distinctio repudiandae reiciendis ipsa!</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "grid";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>