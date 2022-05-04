  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h5 class="h5 text-white">Informacion</h5>
          <p class="text-light">Sistema desarrollado para orientadores del turno vespertino, y para personal del area de informatica.</p>
        </div>
        <div class="col-sm-5">
          <h5 class="h5 text-white">Carreras ofertadas vespertino:</h5>
          <ul>
            <li><p class="text-light">Tecnico en Informatica</p></li>
            <li><p class="text-light">Tecnico en Contabilidad</p></li>
            <li><p class="text-light">Tecnico en Diseño Asistido por computadora</p></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h5 class="h5 text-white">Contacto de la escuela:</h5>
          <ul>
            <li><a href="https://www.google.com.mx/maps/place/Mariano+Matamoros+714,+San+Mateo,+52140+Metepec,+M%C3%A9x./@19.2566075,-99.6140524,17z/data=!3m1!4b1!4m5!3m4!1s0x85cd8bc81d8d2409:0x8f4cdc028b1db23b!8m2!3d19.2566024!4d-99.6118637" class="clase1"><i class="bi bi-geo-alt text-white">Calle Mariano Matamoros #714, Bo. San Mateo, 52140, Metepec, Méx.</i></li></a>
            <li><i class="bi bi-envelope text-white">cbtcapistranmetepec@outlook.com</i></li>
            <li><i class="bi bi-telephone text-white"> 722-232-2460 </i></li>
          </ul>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="{!! asset('estilo/assets/vendor/aos/aos.js') !!}"></script>
  <script src="{!! asset('estilo/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! asset('estilo/assets/vendor/glightbox/js/glightbox.min.js') !!}"></script>
  <script src="{!! asset('estilo/assets/vendor/swiper/swiper-bundle.min.js') !!}"></script>
  <script src="{!! asset('estilo/assets/vendor/php-email-form/validate.js') !!}"></script>
<!-- Scripts pasados -->
    <script src="{!! asset('estilo/js/jquery.min.js') !!}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{!! asset('estilo/js/popper.min.js') !!}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{!! asset('estilo/js/bootstrap.min.js') !!}"></script> <!-- Bootstrap framework -->
    <script src="{!! asset('estilo/js/jquery.easing.min.js') !!}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{!! asset('estilo/js/swiper.min.js') !!}"></script> <!-- Swiper for image and text sliders -->
    <script src="{!! asset('estilo/js/jquery.magnific-popup.js') !!}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{!! asset('estilo/js/validator.min.js') !!}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{!! asset('estilo/js/scripts.js') !!}"></script> <!-- Custom scripts -->
  <!-- Template Main JS File -->
  <script src="{!! asset('estilo/assets/js/main.js') !!}"></script>
  <!-- DataTables -->
  <script src="{!! asset('estilo/datatables/datatables.min.js') !!}"></script>
  <script src="{!! asset('estilo/datatables/main.js') !!}"></script>

  <!-- Alertas -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    $(document).ready(function (){
    $("#btnDelete").click(function(){
        swal({
            title: "Seguro que quieres actualizar?",
            text: "Una vez actualizado no se podra recuperar!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Se actualizo el semestre!", {
                    icon: "success",
                })
                window.location.assign("subirestudiantes")
            } else {
                swal("se cancelo la operacion");
            }
        });
    });
    
    function eliminar(idp)
    {
        var url = "Controlador?accion=Delete";
        $.ajax({
            type: 'POST',
            url: url,
            data:"idp="+idp,
            success: function(data, textStatus, jqXHR)
            {
                
            }
        });
    }
});
</script>
</body>
</html>