
@include('lib.samp')
@php
try {
  $rQuery = new QueryServer( Config::where('clave', 'serverip')->first()->valor, Config::where('clave', 'serverport')->first()->valor );
  $aInformation = $rQuery->GetInfo( );
  $aServerRules = $rQuery->GetRules( );
  $aBasicPlayer = $rQuery->GetPlayers( );
  $aTotalPlayers = $rQuery->GetDetailedPlayers( );
  $rQuery->Close( );
} catch (QueryServerException $pError) { }
$imagenrand = 'imagenes/fondos-cabecera/'.rand(1, 6).'.jpg';
$ropa = 'imagenes/personajes/'.Auth::user()->Skin.'.png';
@endphp

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
  <title>{{Config::where('clave', 'nameserver')->first()->valor}} Roleplay - San Andreas Multiplayer (SAMP en Español)</title>
  <style>
  .fdtabs{
    font-family: 'Oswald', sans-serif;
    font-size:20px;
  }
  .rounded-img{
    display:inline-block;
    overflow:hidden;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    -webkit-box-shadow:0 1px 3px rgba(0,0,0,.9);
    -moz-box-shadow:0 1px 3px rgba(0,0,0,.9);
    box-shadow:0 1px 3px rgba(0,0,0,.9);
  }
  </style>
  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos3.css')}}">
  <link rel="stylesheet" href="{{asset('css/default.css')}}" type="text/css" media="screen"/>
  <link rel="stylesheet" href="{{asset('css/nivo-slider.css')}}" type="text/css" media="screen"/>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script type="text/javascript" src="{{asset('js/jquery.leanModal.min.js')}}"></script>
</head>
<body>
  <script>
  function Ocultar(){
    $('#banner').fadeOut();
  }
  </script>
  <style>
    .baner{
      position:fixed!important;
      z-index:300;
      bottom:30%;
      height:281px;
      position:relative;
      width:500px;
      background-image:url({{asset('imagenes/navidadES.png')}});
      left:25%;
      box-shadow:0 0 20px rgba(0,0,0,0.7),0 1px 20px rgba(0,0,0,0.3);
      border:3px solid #ff0000;
    }
    #cerrar{
      margin-left:483px;
      display:block;
      height:14px;
      background-color:#FFF;
    }
    #bc{
      width:640px;
      height:260px;
      display:block;
    }
  </style>
  <div class="baner" id="banner">
    <a id="cerrar" href="#" onclick="Ocultar()" title="Cerrar">&nbsp;
      <strong>X</strong>&nbsp;
    </a>
    <a id="bc" href="comprar-prendas.php" title="Ver prendas"></a>
  </div>
  <table width="997" border="0" cellpadding="0" cellspacing="0" bgcolor="#E4E4E4" align="center">
    <tr>
      <td width="997">
        <style>
          .alertas{
            float:left;
            margin-left:660px;
            margin-top:170px;
            position:absolute;
            background-color:#0081ff;
            border-radius:3px;
            padding:0.2em 0.4em 0.2em;
            color:#FFFFFF;
            font-weight:bold;
          }
          .alertas a{
            color:#FFF;
          }
          .alertas:hover{
            background-color:#0068ce;
          }
          .alertas a:hover{
            color:#f0f0f0;
          }
        </style>
        <div style="background-color:#000; position:absolute; z-index:20; width:997px; height:164px;  top:29px; background-image:url({{asset($imagenrand)}})"></div>
        @auth
          <div class="header-s3-2">
          @else
            <div class="header-s3-">
            @endauth
            <div class="ip">
              <font size="2px">IP S1:</font>
              <b>
                <a href="samp://{{Config::where('clave', 'serverip')->first()->valor}}@if (Config::where('clave', 'activarpt')->first()->valor == 1):{{Config::where('clave', 'serverport')->first()->valor}}@endif"style="color:#FFFFFF; font-size: 13px;" title="Agregar a favoritos">
                  {{Config::where('clave', 'serverip')->first()->valor}}@if (Config::where('clave', 'activarpt')->first()->valor == 1):{{Config::where('clave', 'serverport')->first()->valor}}@endif
                  </a>
                </b>
              </div>
              @auth
                <div class="logged-usuario">
                  <font size="2px;">
                    {{str_replace("_"," ",Auth::user()->Username)}}
                  </font>
                </div>
                <div class="img-usuario">
                  <img src="{{asset($ropa)}}">
                </div>
                <div class="iconos-usuario">
                  <a href="../cuenta.php" title="Tu cuenta">
                    <img src="{{asset('imagenes/casa.png')}}" align="absmiddle" border="0"/>
                  </a>
                  <a href="../logout.php" title="Cerrar sesión - Salir">
                    <img src="{{asset('imagenes/llave_salir.png')}}" align="absmiddle" border="0"/>
                  </a>
                </div>
              @else
                <div class="casa">
                  <a href="../ingresar.php" title="Ingresa a tu cuenta">
                    <img src="{{asset('imagenes/casa.png')}}" align="absmiddle" border="0">
                  </a>
                </div>
                <div class="nologeado">
                  <a href="../ingresar.php" title="Ingresa a tu cuenta">Iniciar sesión</a>
                </div>
              @endauth
            </div>
            <div id="menu-superior-s3">
              <ul>
                <li id="principal-ac"><a href="index.php">Pincipal</a></li>
                <li id="foro"><a href="./foro/index.php">Foro</a></li>
                @auth
                  <li id="tucuenta"><a href="./cuenta.php">Tu cuenta</a></li>
                  <li id="cuenta-creada"><a></a></li>
                @else
                  <li id="tucuenta"><a href="./ingresar.php">Tu cuenta</a></li>
                  <li id="crear-cuenta"><a href="./nuevo.php">Crear cuenta</a></li>
                @endauth
              </ul>
              <div class="invitaciones-pendientes">
                @auth
                  @php
                    $invitaciones = Invitacion::where('invitado', Auth::user()->Username)->count();
                  @endphp
                  @if($invitaciones)
                    @if($invitaciones == 1)
                      <a href="./invitaciones.php" title="Ver invitaciones"><font size="2px">[ Tienes una invitación de banda ]</font></a>
                    @else
                      <a href="./invitaciones.php" title="Ver invitaciones"><font size="2px">[ Tienes '.$invitaciones.' invitaciones de banda ]</font></a>
                    @endif
                  @endif
                @endauth
              </div>
            </div>
            @auth
              @if (Auth::user()->Baneado == 1)
                <div style="float:left;  width:997px; margin-top:5px; font-size:12px;">
                  <table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
                    <tbody>
                      <tr bgcolor="#333333">
                        <td align="left" style="border-top: 1px solid #424242; border-left: 1px solid #424242; color:#FFFFFF; text-shadow: 0 1px 0 #000000;">
                          <strong><font size="2.6px">Mensajes importantes</font></strong>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <table width="99%" cellspacing="1" cellpadding="4" border="0" bgcolor="#2A2A2A" align="center">
                  <tbody>
                    <tr>
                      <td valign="middle" bgcolor="RED" align="left" colspan="1" style="color:white">
                        <img src="{{asset('imagenes/alerta16.png')}}" align="absmiddle">
                        <font size="2.6px">Tu cuenta ha sido baneada por <strong> {{Auth::user()->razon}}</strong> el <strong>{{Auth::user()->Conexion}}</strong>.</font>
                      </td>
                    </tr>
                  </tbody>
                </table>
              @endif
            @endauth
            <div id="contenido">
              <div id="contenido-izquierdo">
                <div class="td-gr">
                  <div class="icono-td">
                    <img src="{{asset('imagenes/ctrl.png')}}"/>
                  </div>
                  <div style="height:22px; font-weight:bold; font-size:14px; text-shadow:0 1px 0 #FFFFFF; color:#305B79; padding-top:8px;margin-left:10px; margin-left:34px">
                    {{Config::where('clave', 'nameserver')->first()->valor}} - Roleplay
                  </div>
                  <div style="height:190px; background-color:#FFF; padding-top:131px; padding-left:325px;" id="cargando-slider">
                    <img src="{{asset('imagenes/cargando_g.gif')}}"/>
                  </div>
                  <div id="wrapper">
                    <div class="slider-wrapper theme-default">
                      <div id="slider" class="nivoSlider">
                        <img src="{{asset('imagenes/images/6.gif')}}" data-thumb="{{asset('imagenes/images/6.gif')}}" alt="" title="#tab-carreras"/>
                        <img src="{{asset('imagenes/images/2.gif')}}" data-thumb="{{asset('imagenes/images/2.gif')}}" alt="" title="#tab-restaurante"/>
                        <img src="{{asset('imagenes/images/3.gif')}}" data-thumb="{{asset('imagenes/images/3.gif')}}" alt="" title="#tab-policia"/>
                        <img src="{{asset('imagenes/images/4.gif')}}" data-thumb="{{asset('imagenes/images/4.gif')}}" alt="" title="#tab-medico"/>
                        <img src="{{asset('imagenes/images/5.gif')}}" data-thumb="{{asset('imagenes/images/5.gif')}}" alt="" title="#tab-autos"/>
                        <img src="{{asset('imagenes/images/1.gif')}}" data-thumb="{{asset('imagenes/images/1.gif')}}" alt="" title="#tab-municipalidad"/>
                      </div>
                      <div id="tab-municipalidad" class="nivo-html-caption">
                        <span id="msn" style="display:none;">
                          <span class="fdtabs">
                            EDIFICIO <font color="#FF9900">MUNICIPAL</font>
                          </span>
                          <br>Este moderno edificio cuenta con servicio de grúa, compra de vehículos y propiedades.
                        </span>
                      </div>
                      <div id="tab-restaurante" class="nivo-html-caption">
                        <span id="msn" style="display:none;">
                          <span class="fdtabs">
                            TU PROPIO <font color="#FF9900">NEGOCIO</font>
                          </span>
                          <br>Compra tu propio negocio, contrata empleados y gana dinero vendiendo productos.
                        </span>
                      </div>
                      <div id="tab-policia" class="nivo-html-caption">
                        <span id="msn" style="display:none;">
                          <span class="fdtabs">
                            CONTROL DEL <font color="#FF9900">CRIMEN</font>
                          </span>
                          <br>La policía controla San Andreas para que sea un lugar más seguro y tú puedes ser uno de ellos.
                        </span>
                      </div>
                      <div id="tab-medico" class="nivo-html-caption">
                        <span id="msn" style="display:none;">
                          <span class="fdtabs">
                            SERVICIO <font color="#FF9900">MÉDICO</font>
                          </span>
                          <br>Médicos capacitados están las 24 horas del día a la espera de cualquier emergencia.
                        </span>
                      </div>
                      <div id="tab-autos" class="nivo-html-caption">
                        <span id="msn" style="display:none;">
                          <span class="fdtabs">
                            VEHÍCULOS <font color="#FF9900">EN VENTA</font>
                          </span>
                          <br>Tenemos la más amplia variedad de vehículos disponibles en venta.
                        </span>
                      </div>
                      <div id="tab-carreras" class="nivo-html-caption">
                        <span id="msn" style="display:none;">
                          <span class="fdtabs">
                            TORNEO DE <font color="#FF9900">CARRERAS</font>
                          </span>
                          <br>Torneos mensuales con fabulosos premios te esperan, compite y gana puntos en cada carrera.
                        </span>
                      </div>
                    </div>
                    <script type="text/javascript" src="./js/jquery.nivo.slider.js"></script>
                    <script type="text/javascript">
                      $(window).load(function() {
                        $('#slider').nivoSlider({
                          effect: 'boxRain',
                          pauseTime: 8000,
                          beforeChange: function(){
                            $('#msn').hide();
                            $(".nivo-caption").hide();
                            $(".nivo-caption").css("padding","0");
                          },
                          afterChange: function(){
                            $(".nivo-caption").css("padding","10px");
                            $(".nivo-caption").fadeIn(1000);
                            $('#msn').fadeIn(1500);
                          },
                          afterLoad: function(){
                            $('#cargando-slider').hide();
                            $(".nivo-caption").css("padding","10px");
                            $(".nivo-caption").fadeIn(1000);
                            $('#msn').fadeIn(1500);
                          }
                        });
                      });
                    </script>
                  </div>
                </div>
                <?php  ssi_boardNews(1, null, null, 3096);
                include_once('./kev/idioma.php');
                ?>
              </div>
              <div id="menu-derecho">
                @auth
                  <div class="td">
                    <div class="icono-td"><img src="{{asset('imagenes/dinero_p.png')}}"></div>
                    <div class="titulo-td">Tu cuenta</div>
                  </div>

                  <div class="bloque-monedas">
                    <div style="float:left; margin-left:170px; font-size:18px; color:#003366; margin-bottom:4px">{{number_format(Auth::user()->Moneda, 0, '', '.')}} {{Config::where('clave', 'diminutivo')->first()->valor}}</div>
                    <div class="hr2"></div>
                    <div style="float:left; margin-left:170px; font-size:18px; color:#003366; ">${{number_format(Auth::user()->Money+Auth::user()->Banco, 0, '', '.')}}</div>
                    <div class="hr2"></div>
                    <div style="float:left; margin-left:170px; font-size:18px; color:#003366; ">{{Auth::user()->Nivel}}</div>
                    <div class="hr2"></div>
                  </div>
                  <hr>
                  <a href="comprar-oz.php">
                    <center>
                      <img src="{{asset('imagenes/comprar-oz.png')}}" title="Comprar {{Config::where('clave', 'diminutivo')->first()->valor}}" border="0">
                    </center>
                  </a>
                  <hr>
                @endauth
                <div class="td-menu">

                  <div class="icono-td"><img src="{{asset('imagenes/casa.png')}}"/></div>
                  <div class="titulo-td">Tus opciones</div>
                </div>

                <div class="bloque-menu">
                  <a href="cuenta.php" class="panel-principal" title="Panel principal con información de tu cuenta">&raquo;Panel principal</a>
                  <a href="comprar-ropa.php" class="panel-todo" title="Compra ropa para tu personaje">&raquo;Comprar ropa</a>
                  <a href="comprar-vehiculos.php" class="panel-todo" title="Compra vehículos especiales">&raquo;Comprar vehículos</a>
                  <a href="cambiar-nombre.php" class="panel-todo" title="Cambia tu nombre">&raquo;Cambiar nombre</a>
                  @auth
                    @if (Auth::user()->Faccion == 0)
                      <a href="crear-banda.php" class="panel-todo" title="Crear banda">&raquo; Crear banda</a>
                    @else
                      <a href="tubanda.php" class="panel-todo" title="Tu banda">&raquo; Tu banda</a>
                    @endif
                  @endauth
                  <a href="cc.php" class="panel-todo" title="Cambia tu contraseña">&raquo;Cambiar contraseña</a>
                  <a href="cs.php" class="panel-todo" title="Cambia tu contraseña">&raquo;Cambiar de sexo</a>
                  <a href="vip.php" class="panel-todo" title="Area VIP">&raquo;Comprar membresía VIP</a>
                  <a href="invitar-amigo.php" class="panel-todo" title="Invita a un amigo">&raquo;Invitar a un amigo</a>
                  @auth
                    <a href="logout.php" class="panel-todo" title="Cerrar sesión">&raquo;Salir</a>
                  @else
                    <a href="ingresar.php" class="panel-todo" title="Ingresar">&raquo;Ingresar</a>
                  @endauth
                </div>

                <hr/>
                @auth
                  <span style="background:url({{asset('imagenes/totem.png')}}) no-repeat center center; width: 300px; height: 320px; " class="rounded-img">
                    <a href="invitar-amigo.php" title="Click aquí para más información">
                      <span class="rounded-img" style="background:url({{asset('imagenes/totem.png')}}) no-repeat center center; width: 300px; height: 320px;">
                        <img class="rounded-img" src="{{asset('imagenes/totem.png')}}" style="opacity: 0; border:0">
                      </span>
                    </a>
                  </span>
                @endauth
                @if (Config::where('clave', 'activarjc')->first()->valor == 1)
                  <hr>
                  <div class="td">
                    <div class="icono-td"><img src="{{asset('imagenes/diario.png')}}"/></div>
                    <div class="titulo-td">
                      Jugadores Conectados
                    </div>
                  </div>
                  <div class="bloque">
                    <span id="total" style="font-size:35px; color:#050; text-shadow: 0 1px 0 #FFFFFF; margin-left:35%">
                      <center>@if (!empty($aInformation))
                        {{$aInformation['Players']}}
                      @endif</center>
                    </span>
                  </div>
                @endif
                @if (Config::where('clave', 'activares')->first()->valor == 1)
                  <hr>
                  <div class="td">
                    <div class="icono-td"><img src="{{asset('imagenes/estadisticas.png')}}"/></div>
                    <div class="titulo-td">
                      Estado de los servidores
                    </div>
                  </div>

                  <div class="bloque">
                    <span style="font-weight:bold;font-size:12px;color:#003366">
                      Roleplay S1:&nbsp;&nbsp;&nbsp;
                    </span>
                    <span style="font-size:12px;font-weight:bold;color:#305B79">
                      {{Config::where('clave', 'serverip')->first()->valor}}@if (Config::where('clave', 'activarpt')->first()->valor == 1):{{Config::where('clave', 'serverport')->first()->valor}}@endif
                    </span>
                      <span style="float:right;width:68px">
                        <img src="{{asset('imagenes/en-linea.png')}}" align="absmiddle" title="En linea">
                        <span id="rols4" style="color:#030">
                          <font size="2px">
                            @if (!empty($aInformation))
                              {{$aInformation['Players']}}/{{$aInformation['MaxPlayers']}}
                            @endif
                          </font>
                        </span>
                      </span>
                  </div>
                  @endif
                  @if (Config::where('clave', 'activarfb')->first()->valor == 1)
                    <hr/>
                    <div class="td">
                      <div class="icono-td"><img src="{{asset('imagenes/facebook.png')}}"></div>
                      <div class="titulo-td">
                        {{strtoupper(Config::where('clave', 'diminutivo')->first()->valor)}}:RP en Facebook
                      </div>
                    </div>

                    <div class="bloque">
                      <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com/<?php echo $FacebookURL?>/?fref=ts&width=280&colorscheme=light&show_faces=false&stream=false&header=false&height=62" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:280px;height:68px;" allowTransparency="true">
                      </iframe>
                    </div>
                  @endif
                  @if (Config::where('clave', 'activartw')->first()->valor == 1)
                    <hr/>
                    <div class="td">
                      <div class="icono-td"><img src="{{asset('imagenes/twitter.png')}}" height="16" width="16"></div>
                      <div class="titulo-td">{{strtoupper(Config::where('clave', 'diminutivo')->first()->valor)}}:RP en Twitter</div>
                    </div>
                    <div class="bloque">
                      <a class="twitter-timeline" href="https://twitter.com" data-widget-id="<?php echo $TwitterID?>">Twitter {{Config::where('clave', 'nameserver')->first()->valor}}</a>
                      <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                        if(!d.getElementById(id)){js=d.createElement(s);
                          js.id=id;
                          js.src=p+"://platform.twitter.com/widgets.js";
                          fjs.parentNode.insertBefore(js,fjs);
                        }}(document,"script","twitter-wjs");

                      </script>
                    </div>
                  @endif
                  <hr/>
                  <div class="td">
                    <div class="icono-td">
                      <img src="{{asset('imagenes/auto2.png')}}"/>
                    </div>
                    <div class="titulo-td">
                      Torneo de carreras LV (Posiciones)
                    </div>
                  </div>
                  <div class="bloque">
                    @php
                      $carrera = User::->orderBy('PuntosCarrera', 'DESC')->take(5)->get();
                    @endphp
                    @if($countcarrera)
                      @foreach($carrera as $carre)
                        @php
                          $counter++;
                        @endphp
                        {{$counter}} {{$carre->Username}}
                        <span style='float:right; font-size:11px;'>
                          {{$carre->PuntosCarrera}} Puntos
                        </span>
                        <div class='hr'></div>

                      @endforeach
                    @else
                      No se ha encontrado ningún registro
                    @endif
                    <center><a href="./torneo-carreras.php">Ver tabla de posiciones</a></center>
                  </div>
                </div>
                <div id="pie">
                  <hr>
                  {{Config::where('clave', 'nameserver')->first()->valor}} Roleplay &copy; 2016 by Hahn
                </hr>
              </div>
            </td>
          </tr>
        </table>
      </body>
      <div id="lean_overlay"></div>
    </html>
