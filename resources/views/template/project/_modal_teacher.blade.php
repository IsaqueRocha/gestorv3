<div id="adcProf" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Adicionar professor</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nome</label>
                    <input name="name" type="text" value="" class="form-control" placeholder="Nome" required />
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input name="email" type="email" value="" class="form-control" placeholder="E-mail"/>
                </div>

                <div class="form-group">
                    <label>Curso</label>
                    <select name="role" class="form-control">
                        <option>(Selecionar)</option>
                        <option>Artes Visuais</option>
                        <option>Filosofia</option>
                        <option>História</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Telefone:</label>
                    <input name="phone" type="text" value="" class="form-control" placeholder="(__) _____-____" data-inputmask='"mask": "(99) 99999-9999"' data-mask/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Salvar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
