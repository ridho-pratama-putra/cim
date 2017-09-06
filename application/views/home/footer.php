        <footer class="page-footer indigo darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Glory Futsal</h5>
                <p class="grey-text text-lighten-4">Tugase arek pinter </p>
                <p class="footer white-text">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
                <p class="white-text"><?php
                  echo $this->benchmark->memory_usage();
                ?></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Our Crew</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#Andre"><i class="fa fa-github fa-fw"></i>M. Andre Windra</a></li>
                  <li><a class="grey-text text-lighten-3" href="#Ilyas"><i class="fa fa-facebook fa-fw"></i>M. Ilyas</a></li>
                  <li><a class="grey-text text-lighten-3" href="#Isa"><i class="fa fa-instagram fa-fw"></i>M. Isa wibisono</a></li>
                  <li><a class="grey-text text-lighten-3" href="#Ridho"><i class="fa fa-twitter fa-fw"></i>Ridho Pratama</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright " style="border-top: 4px solid #f50057">
            <div class="">
              <div class="container white-text">
                &copy; Arek Pinter
              </div>
            </div>
          </div>
        </footer>
      <?php
      /*echo $this->benchmark->elapsed_time('code_start', 'code_end');
      echo $this->benchmark->elapsed_time();
      echo $this->benchmark->memory_usage();*/
      ?>
      
      
      <script type="text/javascript" src="./assets/js/futsal.js"></script>
      <script type="text/javascript" src="./assets/js/materialize.clockpicker.js"></script>
      <script type="text/javascript" src="./assets/js/materialize.js"></script>
      <script type="text/javascript" src="./assets/js/sweetalert.min.js"></script>
    </body>
  </html>