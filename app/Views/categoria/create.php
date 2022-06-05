<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="/categoria/create" method="post">
        <?= csrf_field() ?>

        <div class="field">
            <label class="label" for="">Categoria:</label>
            <div class="select">
                <select name="nombre" id="">
                    <option value="Politica">Politica</option>
                    <option value="Education">Educacion</option>
                    <option value="Cultuta">Cultuta</option>
                    <option value="Espectaculos">Espectaculos</option>
                    <option value="Deportes">Deportes</option>
                    <option value="Finanzas">Finanzas</option>
                    <option value="Clima">Clima</option>
                </select>
            </div>
        </div>
        
        <div class="field">
            <label class="label" for="">Descripcion:</label>
            <div class="control">
                <textarea class="textarea" name="descripcion" placeholder="temas de la categoria"></textarea>                
            </div>
        </div>


        <div class="field is-grouped">
            <div class="control">
                <input type="submit" class="button is-link" value="Guardar">
            </div>
            <div class="control">
                <input type="reset" value="Restablecer" class="button is-link is-light">
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>