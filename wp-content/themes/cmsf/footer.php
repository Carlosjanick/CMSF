       <footer class="site-footer">
          <div class="container footer-sima">
                <div class="row">
                    <div class="mapa-google">
                        <div class="col-md-6">
						    <h2 class="sub_title">A Nossa Localização ?</h2>
                            <iframe width="100%" height="210px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15423.036861093158!2d-24.499448400000023!3d14.894736500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f4ca4575d715da8!2sCamara+Municipal+de+S%C3%A3o+Filipe!5e0!3m2!1spt-PT!2scv!4v1500936418507"  frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="contato-form">
                        <div class="col-md-6">
							<h2 class="sub_title">Fale Connosco ?</h2>

							<!--<form  name="FormContato" action="#contato" method="post">-->
								<div class="input-group">
									<span class="input-group-addon sp_input"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" name="RemetenteNome" id="RemetenteNome" class="form-control" placeholder="Nome">
								</div>
								<br>

								<div class="input-group">
									<span class="input-group-addon sp_input"><i class="fa fa-envelope"></i></span>
									<input type="email" name="RemetenteEmail" id="RemetenteEmail" class="form-control" placeholder="Email">
								</div>
								<br>

								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon sp_input"><i class="fa fa-pencil" aria-hidden="true"></i></span>
										<textarea class="form-control" name="Mensagem" id="Mensagem" placeholder="Mensagen"></textarea>
									</div>
								</div>

								<div class="form-group">
									<button type="submit" value="sendEmail" name="SendFormContato" class="btn btn-info" style="width: 100%;" id="js_envio">Enviar <i class="fa fa-paper-plane" aria-hidden="true" id="js_envio"></i></button>
								</div>

								<div id="carregando_news" style="text-align: center; display: none;">
									<img src="<?php bloginfo('template_directory'); ?>/img/ajax-loader.gif" alt="Carregando"> Aguarde, enviando os dados...
								</div> <!--carregando_news-->

								<div id="retorno" style="margin-top: 10px; display: none;">
									
								</div><!--retorno-->
							<!--</form>-->
						</div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div id="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-inline navbar-left">
                                    <li>&copy; 2017 Câmara Municipal de São Filipe</li>
                                </ul>
                            </div>
                            <div class="col-md-8 menu-rodape">
                                <ul class="list-inline navbar-right">
                                    <li>design & concepção | Departamento de informática | estagiário <strong>Carlos Pina</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

            <!--voltar ao topo-->
            <a id="back-to-top" href="#" class="btn btn-danger back-to-top"  role="button"  data-toggle="tooltip" data-placement="top"> <span class="glyphicon glyphicon-chevron-up"></span></a>  
            <!--oltar ao topo-->
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jsinit.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.prettyPhoto.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>  
        <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
        

        <script type="text/javascript">
        	$(function(){
                  
                /*caption*/  
                
                $('.thumbnail_p').hover(
                    function(){
                        $(this).find('.caption_p').slideDown(250); //.fadeIn(250)
                    },
                    function(){
                        $(this).find('.caption_p').slideUp(250); //.fadeOut(205)
                    }
                ); 
                
        		$('#js_envio').click(function(event) {
        			beforeSend:$('#carregando_news').show('slow');
        			var remetenteNome  = $('#RemetenteNome').val();
        			var remetenteEmail = $('#RemetenteEmail').val();
        			var mensagem       = $('#Mensagem').val();

                    //window.setTimeout();

        			$.post('<?php bloginfo('template_url'); ?>/admin/form.php', {nome: remetenteNome, email: remetenteEmail , mensagem: mensagem }, function(pegarRetorno) {
        				complete:$('#carregando_news').hide('slow');

        				if(pegarRetorno === 'errempty'){
        					$("#retorno").show("slow").empty().html('<div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Para enviar esse e-mail. Preencha os campos requisitados! </div>');
        				}else if(pegarRetorno === 'errmail'){
        					$("#retorno").show("slow").empty().html('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> O e-mail que você informou não tem um formato válido.</div>');
        				}else if(pegarRetorno === 'errsucess'){
        					$("#retorno").show("slow").empty().html('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Obrigado por entrar em contato: Recebemos sua mensagem e estaremos respondendo em breve!</div>');
        				}else if(pegarRetorno === 'errenvio'){
        					$("#retorno").show("slow").empty().html('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> Erro ao enviar: Entre em contato com o admin.</div>');
        				}
					    
        			});
        		});

        	});
	    </script>
        <?php wp_footer(); ?>
    </body>
</html>