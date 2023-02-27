   <!-- JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="/home_template/lib/wow/wow.min.js"></script>
   <script src="/home_template/lib/easing/easing.min.js"></script>
   <script src="/home_template/lib/waypoints/waypoints.min.js"></script>
   <script src="/home_template/lib/counterup/counterup.min.js"></script>
   <script src="/home_template/lib/owlcarousel/owl.carousel.min.js"></script>
   <script src="/home_template/lib/tempusdominus/js/moment.min.js"></script>
   <script src="/home_template/lib/tempusdominus/js/moment-timezone.min.js"></script>
   <script src="/home_template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

   <!-- Template Javascript -->
   <script src="/home_template/js/main.js"></script>


<script>
    function confirmation(ev) {
      ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');
      console.log(urlToRedirect);
      swal({
          title: "Are you sure to cancel this product",
          text: "You will not be able to revert this!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willCancel) => {
          if (willCancel) {



              window.location.href = urlToRedirect;

          }


      });


  }
</script>
