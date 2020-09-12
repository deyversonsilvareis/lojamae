<?php
// Header
include_once 'includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>dhd</title>
</head>
<body>
<div class="row">
	
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo compra </h3>
		<form name="formulario" action="php_action/create.php" method="POST">
			
				<div class="input-field col s12">
			      	
			      		<select name="Produto" id="Produto">
					<option>Selecione sua compra</option>
					
					<option>
						<?php 
                            $sabonete_liquido ="sabonete liquido ";
                            echo $sabonete_liquido;
						 ?>
					</option>


					<option>
						<?php 
                            $pomada_milagrosa ="pomada milagrosa ";
                            echo $pomada_milagrosa;
						 ?>
					</option>

					<option>
						<?php 
                            $canela_do_velho ="Canela do velho";
                            echo $canela_do_velho;
						 ?>
					</option>
					<option>
						<?php 
                            $xarope_da_vovo ="xarope da vovó";
                            echo $xarope_da_vovo;
						 ?>
					</option>
					<option>
						<?php 
                            $pomada_cura_tudo ="Pomada cura tudo ";
                            echo $pomada_cura_tudo;
						 ?>
					</option>
					<option>

						<?php 
                            $pomada_fisio_forte ="pomada fisio forte ";
                            echo $pomada_fisio_forte;
						 ?>
					</option>
					<option>

						<?php 
                            $talco_pros_pes ="talco pro pes ";
                            echo $talco_pros_pes;
						 ?>
					</option>

					<option>
						<?php 
                            $toalha_rosto ="Toalha de rosto ";
                            echo $toalha_rosto;
						 ?>
					</option>
					<option>
						<?php 
                            $coixa_pintada_oxforde = "coixa oxforde";
                            echo $coixa_pintada_oxforde;
						 ?>
					</option>
					<option>
						<?php 
                            $perfume ="perfume  ";
                            echo $perfume;
						 ?>
					</option>
					<option>
						<?php 
                            $shampu_dora_hair ="shampu dora hair ";
                            echo $shampu_dora_hair;
						 ?>
					</option>

					<option>
						<?php 
                            $mel ="mel ";
                            echo $mel;
						 ?>
					</option>
					<option>
						<?php 
                            $alco_em_gel ="alco em gel";
 
                            echo $alco_em_gel;
						 ?>
					</option>
					<option>
						<?php 
                            $sebo_de_carneiro ="sebo carneiro";
 
                            echo $sebo_de_carneiro;
						 ?>
					</option>
					<option>
						<?php 
                            $sabonete_intimo_barbatimao ="sabonete intimo barbatimao";
 
                            echo $sabonete_intimo_barbatimao;
						 ?>
					</option>
					<option>
						<?php 
                            $sabonete_barra_aroeira = "sabonete barra aroeira";
 
                            echo $sabonete_barra_aroeira;
						 ?>
					</option>

					<option>
						<?php 
                            $lencol_king ="lençol king";
 
                            echo $lencol_king;
						 ?>
					</option>

					<option>
						<?php 
                            $crisma ="crisma cabelo";
 
                            echo $crisma;
						 ?>
					</option>
					<option>
						<?php 
                            $cocada ="doce de cocada";
 
                            echo $cocada;
						 ?>
					</option>
					<option>
						<?php 
                            $doce = "doce";
 
                            echo $doce;
						 ?>
					</option>

					<option>
						<?php 
                            $lencol_casal ="lençol casal";
 
                            echo $lencol_casal;
						 ?>
					</option>

					<option>
						<?php 
                            $lencol_solteiro = "lençol solteiro";
 
                            echo $lencol_solteiro;
						 ?>

					</option>
					<option>
						<?php 
                            $cueca ="cueca box";
 
                            echo $cueca;
						 ?>
					</option>
					<option>
						<?php 
                            $meia_cano_curto ="meia cano curto";
 
                            echo $meia_cano_curto;
						 ?>
					</option>
					<option>
						<?php 
                            $meia_cano_longo ="meia cano longo";
 
                            echo $meia_cano_longo;
						 ?>
					</option>
					<option>
						<?php 
                            $calsinha ="calsinha";
 
                            echo $calsinha;
						 ?>
					</option>
					<option>
						<?php 
                            $pano_de_prato_grande ="pano de pratro grande";
 
                            echo $pano_de_prato_grande;
						 ?>
					</option>
					<option>
						<?php 
                            $pano_de_prato_beradinha ="pano de pratro beradinha";
 
                            echo $pano_de_prato_beradinha;
						 ?>
					</option>
					<option>
						<?php 
                            $pano_de_prato_comun ="pano de pratro comun";
 
                            echo $pano_de_prato_comun;
						 ?>
					</option>
					<option>
						<?php 
                            $sandalha_mis_love ="sandalha mis love";
 
                            echo $sandalha_mis_love;
						 ?>
					</option>
					<option>
						<?php 
                            $chinelo_m ="chinelo masculino";
 
                            echo $chinelo_m;
						 ?>
					</option>
					<option>
						<?php 
                            $chinelo_f ="chinelo femenino";
 
                            echo $chinelo_f;
						 ?>
					</option>
					<option>
						<?php 
                            $capa_de_coixao ="capa de coixão";
 
                            echo $capa_de_coixao;
						 ?>
					</option>
					<option>
						<?php 
                            $capa_de_sofa ="capa de sofa";
 
                            echo $capa_de_sofa;
						 ?>
					</option>
					<option>
						<?php 
                            $almofada ="Amofada";
 
                            echo $almofada;
						 ?>
					</option>
					<option>
						<?php 
                            $sucuri ="sucuri";
 
                            echo $sucuri;
						 ?>
					</option>
					<option>
						<?php 
                            $cura_tudo ="cura tudo";
 
                            echo $cura_tudo;
						 ?>
					</option>
					<option>
						<?php 
                            $leite_sicolizado ="Leitte sicolizado";
 
                            echo $leite_sicolizado;
						 ?>
					</option>
					<option>
						<?php 
                            $olio_de_argam ="olio de argam";
 
                            echo $olio_de_argam;
						 ?>
					</option>
					<option>
						<?php 
                            $sabonete_intimo_herba_max ="sabonete intimo herba max";
 
                            echo $sabonete_intimo_herba_max;
						 ?>
					</option>
					<option>
						<?php 
                            $vick ="Vick";
 
                            echo $vick;
						 ?>
					</option>
					<option>
						<?php 
                            $cacal ="cacal";
 
                            echo $cacal;
						 ?>
					</option>

					<option>
						<?php 
                            $alfase ="Protetor solar de alfase";
 
                            echo $alfase;
						 ?>
					</option>

					<option>
						<?php 
                            $olio_p = "Olio de pernas";
 
                            echo $olio_p;
						 ?>
					</option>
					<option>
						<?php 
                            $olio_p_c ="olio pernas e cabelo";
 
                            echo $olio_p_c;
						 ?>
					</option>
					<option>

						<?php 
                            $dor = "Sarador";
 
                            echo $dor;
						 ?>
					</option>
					<option>
						<?php 
                            $shampu_omega_kbelo ="shmapu omega k belo";
 
                            echo $shampu_omega_kbelo;
						 ?>
					</option>
					<option>
						<?php 
                            $shampu_coco_kbelo ="shmapu coco k belo";
 
                            echo $shampu_coco_kbelo;
						 ?>
					</option>
					<option>
						<?php 
                            $mascara_bio ="Mascara bio estinto";
 
                            echo $mascara_bio;
						 ?>
					</option>
					<option>
						<?php 
                            $mentinha ="mentinha";
 
                            echo $mentinha;
						 ?>
					</option>
					<option>
						<?php 
                            $olio_de_copacaiba ="Olio de copacaiba ";
 
                            echo $olio_de_copacaiba;
						 ?>
					</option>
					<option>
						<?php 
                            $toalha_4_cadeiras ="Toalha de mesa  4 cadeira";
 
                            echo $toalha_4_cadeiras;
						 ?>
					</option>
					<option>
						<?php 
                            $toalha_6_cadeiras ="toalha de mesa 6 cadeira";
 
                            echo $toalha_6_cadeiras;
						 ?>
					</option>
					<option>
						<?php 
                            $toalha_boca ="Toalha de boca";
 
                            echo $toalha_boca;
						 ?>
					</option>
					<option>
						<?php 
                            $toalha_renda ="toalha de renda";
 
                            echo $toalha_renda;
						 ?>
					</option>
					<option>
						<?php 
                            $curtina ="Curtina";
 
                            echo $curtina;
						 ?>
					</option>
					<option>
						<?php 
                            $bastao ="Bastão";
 
                            echo $bastao;
						 ?>
					</option>
					<option>
						<?php 
                            $cobredon ="Cobredon";
 
                            echo $cobredon;
						 ?>

					</option>
					<option>
						<?php 
                            $batom ="Batom";
 
                            echo $batom;
						 ?>
					</option>
					<option>
						<?php 
                            $gota_do_seca ="Gota do Zeca";
 
                            echo $gota_do_seca;
						 ?>
					</option>
					<option>
						<?php 
                            $shampu_dpantol ="shampu Dpantol";
 
                            echo $shampu_dpantol;
						 ?>
					</option>
					<option>
						<?php 
                            $shampu_capucino ="Shampu Capucino";
 
                            echo $shampu_capucino;
						 ?>
					</option>
					<option>
						<?php 
                            $shampu_omega ="Shampu omega";
 
                            echo $shampu_omega;
						 ?>
					</option>
					<option>
						<?php 
                            $shampu_clen ="Shampu clen";
 
                            echo $shampu_clen;
						 ?>
					</option>
					<option>
						<?php 
                            $dvd ="Dvd";
 
                            echo $dvd;
						 ?>
					</option>
					<option>
						<?php 
                            $cd ="cd";
 
                            echo $cd;
						 ?>
					</option>
					<option>
						<?php 
                            $biscoito ="biscoito";
 
                            echo $biscoito;
						 ?>
					</option>

					<option>
						<?php 
                            $camisa_m ="Camisa masculina";
 
                            echo $camisa_m;
						 ?>
					</option>
					<option>
						<?php 
                            $camisa_f ="Camisa femenina";
 
                            echo $camisa_f;
						 ?>
					</option>
					<option>
						<?php 
                            $calsa_m ="Calsa masculina";
 
                            echo $calsa_m;
						 ?>
					</option>
					<option>
						<?php 
                            $calsa_f ="Calsa femenina";
 
                            echo $calsa_f;
						 ?>
					</option>
					<option>
						<?php 
                            $blusa_r ="Blusa de renda";
 
                            echo $blusa_r;
						 ?>
					</option>
					<option>
						<?php 
                            $jaqueta ="Jaqueta";
 
                            echo $jaqueta;
						 ?>
					</option>
					<option>
						<?php 
                            $colete ="Colete femenino";
 
                            echo $colete;
						 ?>
					</option>
					<option>
						<?php 
                            $leque ="Calsa Leque";
 
                            echo $leque;
						 ?>
					</option>
					<option>
						<?php 
                            $leque_b ="Leque Bolha";
 
                            echo $leque_b;
						 ?>
					</option>
					<option>
						<?php 
                          $blusa_s_p = "Blusa Sengunda pele";
 
                            echo $blusa_s_p;
						 ?>
					</option>
					<option>
						<?php 
                          $blusa_a = "Blusa de Alsinha";
 
                            echo $blusa_a;
						 ?>
					</option>
					<option>
						<?php 
                          $vestido = "vestido";
 
                            echo $vestido;
						 ?>
					</option>
					<option>
						<?php 
                          $porta_causinha = "Porta Causinha";
 
                            echo $porta_causinha;
						 ?>
					</option>
					<option>
						<?php 
                          $caxicol = "Caxicol";
 
                            echo $caxicol;
						 ?>
					</option>
					<option>
						<?php 
                          $fronha = "Fronha";
 
                            echo $fronha;
						 ?>
					</option>
					<option>
						<?php 
                          $caminho_m = "Caminho de Mesa";
 
                            echo $caminho_m;
						 ?>
					</option>
					<option>
						<?php 
                          $jogo_c = "Jogo de cusinha";
 
                            echo $jogo_c;
						 ?>
					</option>
					<option>
						<?php 
                          $shampu_anti_c = "Shampu anti Caspas";
 
                            echo $shampu_anti_c;
						 ?>
					</option>
					<option>
						<?php 
                          $sebo_t_azul = "Sebo tampa Azul";
 
                            echo $sebo_t_azul;
						 ?>
					</option>
					<option>
						<?php 
                          $shampu_cas_pro = "Shampu cascata de Proteina";
 
                            echo $shampu_cas_pro;
						 ?>
					</option>

					<option>
						<?php 
                          $maquiagem = "Maquiagem";
 
                            echo $maquiagem;
						 ?>
					</option>

					<option>
						<?php 
                          $toalha_bn = "Toalha de banho";
 
                            echo $toalha_bn;
						 ?>
					</option>
					<option>
						<?php 
                          $olio_coco = "Olio de coco";
 
                            echo $olio_coco;
						 ?>
					</option>
					<option>
						<?php 
                          $mas_d= "Mascara de Dpantol";
 
                            echo $mas_d;
						 ?>
					</option>
					<option>
						<?php 
                          $mas_c = "Mascara de cascata";
 
                            echo $mas_c;
						 ?>
					</option>
					<option>
						<?php 
                          $mas_o = "Mascara omega";
 
                            echo $mas_o;
						 ?>
					</option>
					<option>
						<?php 
                          $mas_v = "Mascara Vernis";
 
                            echo $mas_v;
						 ?>
					</option>

					<option>
						<?php 
                          $mas_a = "Mascara amexa";
 
                            echo $mas_a;
						 ?>
					</option>
					<option>
						<?php 
                          $mas_ca = "Mascara Capucino";
 
                            echo $mas_ca;
						 ?>
					</option>

					<option>
						<?php 
                          $mas_o_c = "Mascara olio Coco";
 
                            echo $mas_o_c;
						 ?>
					</option>
					<option>
						<?php 
                          $mas_clin= "Mascara clin";
 
                            echo $mas_clin;
						 ?>
					</option>

					<option>
						<?php 
                          $mas_d_c = "Mascara desmaia cabelo";
 
                            echo $mas_d_c;
						 ?>
					</option>
					<option>
						<?php 
                          $shampu_ver = "Shampu Vernis";
 
                            echo $shampu_ver;
						 ?>
					</option>
					<option>
						<?php 
                          $shampu_a = "Shampu amexa";
 
                            echo $shampu_a;
						 ?>
					</option>
					<option>
						<?php 
                          $gel_s_m = "Gel santa Maria";
 
                            echo $gel_s_m;
						 ?>
					</option>
					<option>
						<?php 
                          $jogo_de_c= "Jogo de copo";
 
                            echo $jogo_de_c;
						 ?>
					</option>
					<option>
						<?php 
                          $jogo_de_t = "Jogo de talher";
 
                            echo $jogo_de_t;
						 ?>
					</option>
					<option>
						<?php 
                          $jogo_de_p = "Jogo de Prato";
 
                            echo $jogo_de_p;
						 ?>
					</option>
					<option>
						<?php 
                          $jogo_de_pan = "Jogo de Panele";
 
                            echo $jogo_de_pan;
						 ?>
					</option>
					<option>
						<?php 
                          $jogo_de_v = "Jogo de Vasilha";
 
                            echo $jogo_de_v;
						 ?>
					</option>
					<option>
						<?php 
                          $tapete = "Tapete";
 
                            echo $tapete;
						 ?>
					</option>
					<option>
						<?php 
                          $passadeira = "passadeira";
 
                            echo $passadeira;
						 ?>
					</option>
					<option>
						<?php 
                          $canela_do_velho_b = "Canela do velho de tomar";
 
                            echo $canela_do_velho_b;
						 ?>
					</option>
					<option>
						<?php 
                          $capa_m = "Capa de Maquina";
 
                            echo $capa_m;
						 ?>
					</option>
					<option>
						<?php 
                          $coixa_p = "Coixa petrovikpetrovik";
 
                            echo $coixa_p;
						 ?>
					</option>
					<option>
						<?php 
                          $tubarao = "Tubarão";
 
                            echo $tubarao;
						 ?>
					</option>
					
				</select>
				<label for="Produto">Produto</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="quantidade" id="quantidade" required="">
				<label for="Quantidade">Quantidade</label>
			</div>

		

			<div class="input-field col s12">
				<input type="text" name="valor_produto" onchange="mutiplicar()" id="valor_produto" required="">
				<label for="valor_produto">Valor produto</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="valor_total_produto" id="valor_total_produto" required="">
				<label for="valor_total_produto">valor Total Produto</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="homer.php" class="btn green"> Lista de compras </a>
		</form>
		
	</div>
</div>
</form>


<?php
// Footer
include_once 'includes/footer.php';
?>
</body>
<script type="text/javascript">
	function mutiplicar(){
		document.formulario.valor_total_produto.value=
		Number (document.formulario.quantidade.value)*
		Number (document.formulario.valor_produto.value);
	}

</script>
</html>