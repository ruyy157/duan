
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                   
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($theloai as $loai) : ?>
                                                    <tr>
                                                        <td><?= $loai['id'] ?></td>
                                                        <td><?= $loai['ten'] ?></td>
                                                        
                                            
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
 