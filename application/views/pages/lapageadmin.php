<main id="main">
    <div class="container">
    <div class="row" style="margin-top: 200px;">
        <div class="col-xs-6 col-xs-offset-3 table-responsive divAdmin">
		<form action="<?php echo site_url('Controller/validerLeCode'); ?>" method="POST" id="fruitkha-contact">
			<h2>La liste des codes a valider</h2>
            <table class="table table-bordered table-striped table-condensed" border=1px cellspacing=0>
                    <th>Nom de l'Utilisateur</th>
                    <th>Le Code</th>
                    <th></th>
                        <?php 
                        if($codeavalide['count'] !=0){
                            for($i=0; $i<$codeavalide['count']; $i++){ ?><tr>
                                <td><?php echo $codeavalide['codeavalide'][$i]['nomUtilisateur']; ?></td>
                                <td><?php echo $codeavalide['codeavalide'][$i]['code_code']; ?></td>
                                <input type="hidden" name="codeavalide" value="<?php echo $codeavalide['codeavalide'][$i]['idUtilisateur']; ?>">
                                <input type="hidden" name="idcode" value="<?php echo $codeavalide['codeavalide'][$i]['idcode']; ?>">
                                <input type="hidden" name="code_code" value="<?php echo $codeavalide['codeavalide'][$i]['code_code']; ?>">
                                <td><button type="submit">Valider le code</button></td></tr>
                            <?php } }?>
            </table>
		</form>
    </div>
</div>
</main>
