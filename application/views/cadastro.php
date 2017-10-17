 
<!DOCTYPE html>
<html class="nojs html" lang="pt-BR">
    <head>

        <script type="text/javascript">
            if (typeof Muse == "undefined")
                window.Muse = {};
            window.Muse.assets = {"required": ["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "cadastro.css"], "outOfDate": []};
        </script>

        <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
        <meta name="generator" content="2015.1.0.342"/>
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('muse/CSS/site_global.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('muse/CSS/master_a-mestre.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('muse/CSS/cadastro.css'); ?>" id="pagesheet"/>
        <!-- Other scripts -->
        <script type="text/javascript">
            document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
        </script>
    </head>
    <body>

        <div class="clearfix borderbox" id="page"><!-- group -->
            <div class="clearfix grpelem" id="u1757"><!-- column -->
                <div class="clearfix colelem" id="u1397"><!-- group -->
                    <div class="grpelem" id="u1303"><!-- simple frame --></div>
                    <div class="grpelem" id="u1304"><!-- simple frame --></div>
                </div>

                <a class="nonblock nontext clip_frame colelem" id="u1367" href="/helpanimalweb"><!-- image --><img class="block" id="u1367_img" src="<?php echo base_url('muse/images/logo help animails cor.png');?>" alt="" /></a>
                <div class="colelem" id="u1576"><!-- custom html -->
                    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('muse/css/cadastrousu.css'); ?>">
                   
              
            <?php echo form_open("controlador/gravarusuario"); ?>
                    <form   ng-submit="submitMyData(),md-form-validator" > 
                    <div class="card" >

                        <h3>
                            <b> CADASTRO </b>
                        </h3>


                        <div class="inputgroup">

                            <input  type="text" class="input" required name=nomeUsuario placeholder="Digite seu nome" >
                            <div class="bar">
                                <div class="gray"></div>
                                <div class="purple"></div>
                            </div>

                            <label>Nome</label>

                        </div>

                        <div class="inputgroup">

                            <div class="bar">
                                <div class="gray"></div>
                                <div class="purple"></div>
                            </div>

                            <input  type="text" class="input" required name=sobreNomeUsuario placeholder="Digite seu sobrenome">
                            <div class="bar">
                                <div class="gray"></div>
                                <div class="purple"></div>
                            </div >
                            <label>Sobrenome</label>
                            
                        </div>

                        <div class="inputgroup">
                            <input  type="email" class="input"   placeholder="Digite seu e-mail " onblur="validacaoEmail(f1.email)"  required name = email>
                            <div class="bar">
                                <div class="gray"></div>
                                <div class="purple"></div>
                            </div >
                            <label>E-mail</label>
                        </div>
                        <div id="msgemail"> </div>

                        <div class="inputgroup">
                            <input  type="password" class="input"   required name=senhaUsuario placeholder="Digite sua senha">
                            <div class="bar">
                                <div class="gray"></div>
                                <div class="purple"></div>
                            </div>
                            <label>Senha</label>
                        </div>
                        <div class="inputgroup">
                            <input  type="password" class="input"  required name=senhaconfig  placeholder="Digite sua senha novamente">
                            <div class="bar">
                                <div class="gray"></div>
                                <div class="purple"></div>
                            </div>
                            <label>Senha</label>
                        </div>

                        <button type="submit" class="btn">ENVIAR</button>

                   
                    </div>
                         </form>
<?php echo form_close(); ?>
                </div>
                 <?php if (isset($mensagem)) { ?>

                            <script>alert('<?php echo $mensagem; ?> ');</script>

                        <?php } ?>  
                
            </div>
            <div class="verticalspacer"></div>
            <div class="clearfix grpelem" id="u1027-4"><!-- content -->
                <p>Copyright ©&nbsp; 2017 Hardcore tecnologia.</p>
            </div>
        </div>
        <!-- JS includes -->
        <!-- mensagem de validação de email -->
        <script language="Javascript">
function validacaoEmail(field) {
usuario = field.value.substring(0, field.value.indexOf("@"));
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

if ((usuario.length >=1) &&
    (dominio.length >=3) && 
    (usuario.search("@")==-1) && 
    (dominio.search("@")==-1) &&
    (usuario.search(" ")==-1) && 
    (dominio.search(" ")==-1) &&
    (dominio.search(".")!=-1) &&      
    (dominio.indexOf(".") >=1)&& 
    (dominio.lastIndexOf(".") < dominio.length - 1)) {
document.getElementById("msgemail").innerHTML="E-mail válido";
alert("E-mail valido");
}
else{
document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
alert("E-mail invalido");
}
}
</script>
<script language="JavaScript">
var cont = 0;
function register(){
     cont++;
    if(cont==1){
      $('.regist').css('display','block');
      $('.login').css('display','none');
      
    }
    else
    {
      $('.regist').css('display','none');
      $('.login').css('display','block');
      cont = 0;
    }
}
function ForgotP(){
  cont++;
  if(cont==1){
    $('.ForgotPassword').css('display','block');
    $('.login').css('display','none');
    
  }
  else{
    $('.ForgotPassword').css('display','none');
    $('.login').css('display','block');
    cont = 0;
  }
}

</script>
<!-- validação de campos -->
<script language="JavaScript" >
function enviardados(){
 
if(document.dados.nomeUsuario.value=="" || document.dados.nomeUsuario.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.dados.nomeUsuario.focus();
return false;
}
 if(document.dados.sobreNomeUsuario.value=="" || document.dados.sobreNomeUsuario.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.dados.SobreNomeUsuario.focus();
return false;
}
 
if( document.dados.tx_email.value=="" || document.dados.tx_email.value.indexOf('@')==-1 || document.dados.tx_email.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL corretamente!" );
document.dados.tx_email.focus();
return false;
}
return true;
}
if(document.dados.senhaUsuario.value=="" || document.dados.senhaUsuario.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.dados.senhaUsuario.focus();
return false;
}
 
</script>

        <script type="text/javascript">
            if (document.location.protocol !== 'https:')
                document.write('\x3Cscript src="<?php echo base_url('http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js') ?>" type="text/javascript">\x3C/script>');
        </script>
        <script type="text/javascript">
            window.jQuery || document.write('\x3Cscript src="<?php echo base_url('muse/scripts/jquery-1.8.3.min.js') ?>" type="text/javascript">\x3C/script>');
        </script>
        <script src="<?php echo base_url('muse/scripts/museutils.js?4190794036') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('muse/scripts/whatinput.js?84559013') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('muse/scripts/jquery.watch.js?349565855') ?>" type="text/javascript"></script>
        <!-- Other scripts -->
        <script type="text/javascript">
            $(document).ready(function () {
                try {
                    (function () {
                        var a = {}, b = function (a) {
                            if (a.match(/^rgb/))
                                return a = a.replace(/\s+/g, "").match(/([\d\,]+)/gi)[0].split(","), (parseInt(a[0]) << 16) + (parseInt(a[1]) << 8) + parseInt(a[2]);
                            if (a.match(/^\#/))
                                return parseInt(a.substr(1), 16);
                            return 0
                        };
                        (function () {
                            $('link[type="text/css"]').each(function () {
                                var b = ($(this).attr("href") || "").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);
                                b && b[1] && b[2] && (a[b[1]] = b[2])
                            })
                        })();
                        (function () {
                            $("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
                            for (var c = $(".version"), d = 0; d < Muse.assets.required.length; ) {
                                var f = Muse.assets.required[d], g = f.match(/([\w\-\.]+)\.(\w+)$/), k = g && g[1] ? g[1] : null, g = g && g[2] ? g[2] : null;
                                switch (g.toLowerCase()) {
                                    case "css":
                                        k = k.replace(/\W/gi, "_").replace(/^([^a-z])/gi, "_$1");
                                        c.addClass(k);
                                        var g = b(c.css("color")), h = b(c.css("background-color"));
                                        g !== 0 || h !== 0 ? (Muse.assets.required.splice(d, 1), "undefined" !== typeof a[f] && (g !== a[f] >>> 24 || h !== (a[f] & 16777215)) && Muse.assets.outOfDate.push(f)) : d++;
                                        c.removeClass(k);
                                        break;
                                        case "js":
                                        k.match(/^jquery-[\d\.]+/gi) &&
                                                typeof $ !== "undefined" ? Muse.assets.required.splice(d, 1) : d++;
                                        break;
                                        default:
                                        throw Error("Unsupported file type: " + g);
                                        }
                            }
                            c.remove();
                            if (Muse.assets.outOfDate.length || Muse.assets.required.length)
                                c = "Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.", (d = location && location.search && location.search.match && location.search.match(/muse_debug/gi)) && Muse.assets.outOfDate.length && (c += "\nOut of date: " + Muse.assets.outOfDate.join(",")), d && Muse.assets.required.length && (c += "\nMissing: " + Muse.assets.required.join(",")), alert(c)
                        })()
                    })();
                    /* body */
                    Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
                    Muse.Utils.prepHyperlinks(true);/* body */
                    Muse.Utils.fullPage('#page');/* 100% height page */
                    Muse.Utils.showWidgetsWhenReady();/* body */
                    Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
                } catch (e) {
                    if (e && 'function' === typeof e.notify)
                        e.notify();
                    else
                        Muse.Assert.fail('Error calling selector function:' + e);
                }
            });
        </script>
    </body>
</html>