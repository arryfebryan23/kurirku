<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>All Transactions</h1>
        </div>

        <!-- Section Body -->
        <div class="section-body">
            <h2 class="section-title">Semua Transaksi</h2>

            <div class="card">
                <!-- Card Body -->
                <div class="card-body">
                    <button class="btn-primary btn btn-lg">New Transaction</button>
                    <hr>
                    <table class="table table-hover table-striped table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th width="55px" scope="col">#</th>
                                <th width="170px" scope="col">No. Resi</th>
                                <th width="250px" scope="col">Status</th>
                                <th width="120px" scope="col">Driver</th>
                                <th width="140px" scope="col">Jenis Layanan</th>
                                <th width="100px" scope="col">Berat</th>
                                <th width="140px" scope="col">Tgl. Masuk</th>
                                <th class="text-center" width="160px" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 10; $i++) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <th>KK-1017449427</th>
                                    <td><span class="badge badge-warning">Sedang Bersama Driver</span></td>
                                    <td><a href="#">Arry Febryan</a></td>
                                    <td>REG</td>
                                    <td>1.0 Kg</td>
                                    <td>2020-01-02</td>
                                    <td class="text-center">
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-toggle="tooltip" data-placement="bottom" title="Detail Transaksi">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <a class="btn btn-primary btn-sm" href="#" data-toggle="tooltip" data-placement="bottom" title="Detail Transaksi">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm" href="#" data-toggle="tooltip" data-placement="bottom" title="Detail Transaksi">
                                            </i><i class="fas fa-phone"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
                <!-- End of Card Body -->

            </div>

        </div>
        <!-- End of Section Body -->
    </section>
</div>

<!-- ============================================================================================================================================== -->
<!-- Modal Detail Transaction -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog modal-xl" role="document">
        <!-- Modal Content -->
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Transaction | No. Resi : KK-1017123321 | <span class="badge badge-sm badge-warning">Sedang bersama driver</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <hr class="m-0 mb-4">
                    <!-- Baris Ke-1 -->
                    <div class="row">
                        <!-- Data Pengirim -->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Pengirim</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" value="KK-123123123" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telp Pengirim</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" value="KK-123123123" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Pengirim</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control form-control-sm" style="height: 150px;" disabled>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et harum est cupiditate debitis eum dignissimos assumenda aperiam nihil saepe. Eligendi provident optio impedit, omnis nemo expedita aut. In officiis aliquid quibusdam autem soluta rem amet explicabo debitis? Itaque eligendi eius error totam minus ut ad, porro, quisquam placeat exercitationem dolores, soluta corporis perferendis voluptas. Nihil veniam quae deserunt quaerat, excepturi cupiditate modi vel ducimus maxime. Incidunt a, id delectus mollitia ipsum voluptatum enim eius expedita nisi ducimus molestiae corrupti temporibus asperiores quisquam quidem voluptatem consequatur. Voluptatem porro dolore quod, corrupti dolores asperiores modi doloribus veniam, ab officia ad nesciunt impedit vero deserunt blanditiis cumque earum. Quo fugit nesciunt, culpa unde optio alias natus accusantium mollitia possimus officiis quis odio iure sunt non rem pariatur temporibus dolorum labore magnam rerum? Ex commodi quaerat unde tenetur aliquam, voluptatem asperiores ut illo voluptate fuga ipsam, nobis esse enim aut dolor distinctio, possimus a. Itaque atque pariatur in esse earum, ut consequatur. Laudantium voluptatem repudiandae reprehenderit tempore id incidunt quas inventore quibusdam culpa quia obcaecati similique, dolorem nemo laborum dolor sapiente adipisci corrupti consectetur amet exercitationem, quos ratione iusto? Corrupti fugit provident saepe! Soluta, harum? Quia ea distinctio iusto tempore quis neque perspiciatis ab facere suscipit. Vitae, eligendi ex eaque expedita amet veniam quaerat ab ullam officia vero quas unde aut iste doloribus voluptates? Consequuntur autem error suscipit quidem nulla nesciunt quia totam explicabo eligendi quis voluptatem nisi nobis, repellendus quisquam illo earum maiores possimus soluta consequatur. Ut unde alias quas natus, at excepturi corrupti aspernatur totam ex doloremque quasi libero voluptas quis placeat ipsum perferendis illum accusantium earum nobis commodi, minima nesciunt similique debitis. Soluta natus non repudiandae maiores pariatur eligendi magnam, suscipit consectetur reprehenderit obcaecati aut, illo nostrum et ab, error ea assumenda voluptatibus in quod laudantium cum magni voluptas sint? Nostrum, incidunt necessitatibus ut in laborum error hic explicabo placeat rerum voluptatem, nam dolorem accusamus quos culpa consectetur obcaecati corrupti facilis optio eos inventore soluta impedit minus enim temporibus? Quibusdam cupiditate totam impedit est vel tempore amet, quaerat id ex doloremque recusandae ad aut qui, maxime a. Optio fugit doloribus, eos cumque, delectus excepturi debitis quis voluptatum pariatur quaerat nemo? Fugiat, praesentium deleniti. Est placeat, consectetur culpa dolores, numquam nostrum fuga quibusdam ea itaque labore voluptatum, adipisci doloribus nisi distinctio ipsum aperiam? Enim libero obcaecati ipsum fuga id, molestias quibusdam vitae dolores illum nam alias suscipit ducimus, beatae delectus! Quo tenetur enim quae quidem soluta commodi sapiente recusandae illo nemo voluptate totam at repellat, sint laboriosam dolore non animi ad, voluptatem et, atque impedit possimus accusantium cumque quam. Quibusdam cupiditate necessitatibus nostrum consequatur distinctio cum odit laborum sapiente eligendi voluptate facilis eveniet blanditiis deserunt excepturi recusandae fugiat debitis unde, dignissimos obcaecati id illo, mollitia nulla. Sapiente, quibusdam velit. Maxime laboriosam laudantium numquam voluptates ex adipisci consequuntur facere ea. In eveniet similique autem est, impedit aliquam labore quidem molestias amet repellendus eos accusamus sed? Molestiae optio vero facilis explicabo nobis, quas dolor corporis nemo earum ducimus? Sequi deleniti fugiat architecto, quo labore saepe cumque dolores facere velit quibusdam? Quisquam, nam iste. Voluptas cumque nam minima minus fuga rerum tenetur? Enim, dignissimos aliquam voluptas asperiores delectus unde aliquid dolore, aut provident non dolor fuga beatae officiis animi corrupti? Voluptatibus voluptatum facere dicta dolor asperiores. Doloremque, eveniet qui! Aperiam quia, deserunt possimus, ab eaque porro voluptatum aliquam repellat beatae ratione ad quae ipsum sit necessitatibus architecto! Exercitationem cum sunt ex eaque in incidunt, laboriosam ipsa doloribus perferendis amet ducimus, nulla perspiciatis harum, eveniet praesentium. Neque excepturi eaque atque quam! Odio, provident fuga placeat possimus quidem animi error, ut explicabo alias earum dolor! Doloribus labore sapiente adipisci. Ipsam odit ea eius repellendus iusto voluptates ratione placeat quisquam doloribus, distinctio harum nam est error, molestiae perspiciatis optio obcaecati deleniti! Numquam quas labore repellat cum blanditiis. Excepturi ad est maxime impedit consectetur ullam a magni esse nostrum officiis. Quidem porro eaque quos distinctio nam necessitatibus nisi magnam doloribus aliquid tenetur sed officiis, hic, maiores praesentium est nostrum harum maxime quasi quae ab sequi exercitationem! Quibusdam placeat eius libero est voluptate labore eum quod nesciunt numquam. Quibusdam voluptates minus hic dolor accusantium rerum magni tenetur distinctio quae maiores architecto obcaecati commodi voluptate repudiandae doloremque delectus, amet vero at et corporis dolore qui id modi inventore. Sapiente molestiae enim impedit modi cupiditate libero aut mollitia possimus. Saepe debitis aliquid, maxime ut autem impedit doloremque corrupti, accusamus ipsa, asperiores id sint quia enim minus distinctio voluptatem quibusdam tempore at! Animi ducimus est doloremque amet! Fuga magnam voluptate accusantium voluptatibus soluta dolore eveniet, quos animi? Pariatur, odit. Reiciendis quia a provident et, ea ad vel quod architecto quos sunt aperiam maxime iusto harum rem id obcaecati perspiciatis corrupti consequatur quaerat eligendi. Ipsa alias ducimus magni soluta velit omnis impedit illum sapiente quo fugiat consectetur non, magnam porro eligendi unde aliquam fuga nobis veniam animi incidunt! Veniam excepturi alias odio. Doloribus, quos natus cum quia delectus praesentium vel quidem sit numquam mollitia possimus molestias quasi voluptas id officiis dolorum voluptate aspernatur modi enim at asperiores nobis fugiat culpa aliquam? Laboriosam voluptates non autem corporis facere eius nam et maiores quidem. Voluptatem eius rem hic numquam iste earum. Blanditiis voluptatibus molestiae ut harum eum illum eos, non debitis vitae aut ipsam laboriosam porro perspiciatis aspernatur impedit sapiente inventore et nesciunt, aliquid a amet voluptatem laudantium. Quas, obcaecati ratione. Suscipit illo cumque atque? Placeat ipsam dolore quo perferendis alias, voluptate incidunt voluptatibus laudantium veniam, quas vitae cupiditate porro quod omnis temporibus quibusdam, possimus cumque nobis quasi quia eum? Explicabo minus maxime voluptatibus aliquid voluptatem quibusdam amet non accusamus sit iure voluptatum ad odit nulla eligendi quia fugit unde, temporibus natus, quae iusto optio illum? Officiis, molestias porro doloribus expedita doloremque magni voluptates mollitia rerum aliquam non earum fugiat minima minus, dolorum ut nemo ipsam accusantium error excepturi alias sunt. Deleniti fuga nostrum maiores enim odit totam quis voluptatem expedita impedit, ipsa illo ducimus nobis asperiores. Nulla aspernatur magni necessitatibus id iusto maxime laudantium pariatur, quia, nesciunt dolore aperiam ab quis. Quia, eos molestias!
                                    </textarea>
                                </div>
                            </div>

                        </div>

                        <!-- Data Penerima -->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Penerima</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" value="KK-123123123" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telp Penerima</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" value="KK-123123123" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Penerima</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control form-control-sm" style="height: 150px;" disabled>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et harum est cupiditate debitis eum dignissimos assumenda aperiam nihil saepe. Eligendi provident optio impedit, omnis nemo expedita aut. In officiis aliquid quibusdam autem soluta rem amet explicabo debitis? Itaque eligendi eius error totam minus ut ad, porro, quisquam placeat exercitationem dolores, soluta corporis perferendis voluptas. Nihil veniam quae deserunt quaerat, excepturi cupiditate modi vel ducimus maxime. Incidunt a, id delectus mollitia ipsum voluptatum enim eius expedita nisi ducimus molestiae corrupti temporibus asperiores quisquam quidem voluptatem consequatur. Voluptatem porro dolore quod, corrupti dolores asperiores modi doloribus veniam, ab officia ad nesciunt impedit vero deserunt blanditiis cumque earum. Quo fugit nesciunt, culpa unde optio alias natus accusantium mollitia possimus officiis quis odio iure sunt non rem pariatur temporibus dolorum labore magnam rerum? Ex commodi quaerat unde tenetur aliquam, voluptatem asperiores ut illo voluptate fuga ipsam, nobis esse enim aut dolor distinctio, possimus a. Itaque atque pariatur in esse earum, ut consequatur. Laudantium voluptatem repudiandae reprehenderit tempore id incidunt quas inventore quibusdam culpa quia obcaecati similique, dolorem nemo laborum dolor sapiente adipisci corrupti consectetur amet exercitationem, quos ratione iusto? Corrupti fugit provident saepe! Soluta, harum? Quia ea distinctio iusto tempore quis neque perspiciatis ab facere suscipit. Vitae, eligendi ex eaque expedita amet veniam quaerat ab ullam officia vero quas unde aut iste doloribus voluptates? Consequuntur autem error suscipit quidem nulla nesciunt quia totam explicabo eligendi quis voluptatem nisi nobis, repellendus quisquam illo earum maiores possimus soluta consequatur. Ut unde alias quas natus, at excepturi corrupti aspernatur totam ex doloremque quasi libero voluptas quis placeat ipsum perferendis illum accusantium earum nobis commodi, minima nesciunt similique debitis. Soluta natus non repudiandae maiores pariatur eligendi magnam, suscipit consectetur reprehenderit obcaecati aut, illo nostrum et ab, error ea assumenda voluptatibus in quod laudantium cum magni voluptas sint? Nostrum, incidunt necessitatibus ut in laborum error hic explicabo placeat rerum voluptatem, nam dolorem accusamus quos culpa consectetur obcaecati corrupti facilis optio eos inventore soluta impedit minus enim temporibus? Quibusdam cupiditate totam impedit est vel tempore amet, quaerat id ex doloremque recusandae ad aut qui, maxime a. Optio fugit doloribus, eos cumque, delectus excepturi debitis quis voluptatum pariatur quaerat nemo? Fugiat, praesentium deleniti. Est placeat, consectetur culpa dolores, numquam nostrum fuga quibusdam ea itaque labore voluptatum, adipisci doloribus nisi distinctio ipsum aperiam? Enim libero obcaecati ipsum fuga id, molestias quibusdam vitae dolores illum nam alias suscipit ducimus, beatae delectus! Quo tenetur enim quae quidem soluta commodi sapiente recusandae illo nemo voluptate totam at repellat, sint laboriosam dolore non animi ad, voluptatem et, atque impedit possimus accusantium cumque quam. Quibusdam cupiditate necessitatibus nostrum consequatur distinctio cum odit laborum sapiente eligendi voluptate facilis eveniet blanditiis deserunt excepturi recusandae fugiat debitis unde, dignissimos obcaecati id illo, mollitia nulla. Sapiente, quibusdam velit. Maxime laboriosam laudantium numquam voluptates ex adipisci consequuntur facere ea. In eveniet similique autem est, impedit aliquam labore quidem molestias amet repellendus eos accusamus sed? Molestiae optio vero facilis explicabo nobis, quas dolor corporis nemo earum ducimus? Sequi deleniti fugiat architecto, quo labore saepe cumque dolores facere velit quibusdam? Quisquam, nam iste. Voluptas cumque nam minima minus fuga rerum tenetur? Enim, dignissimos aliquam voluptas asperiores delectus unde aliquid dolore, aut provident non dolor fuga beatae officiis animi corrupti? Voluptatibus voluptatum facere dicta dolor asperiores. Doloremque, eveniet qui! Aperiam quia, deserunt possimus, ab eaque porro voluptatum aliquam repellat beatae ratione ad quae ipsum sit necessitatibus architecto! Exercitationem cum sunt ex eaque in incidunt, laboriosam ipsa doloribus perferendis amet ducimus, nulla perspiciatis harum, eveniet praesentium. Neque excepturi eaque atque quam! Odio, provident fuga placeat possimus quidem animi error, ut explicabo alias earum dolor! Doloribus labore sapiente adipisci. Ipsam odit ea eius repellendus iusto voluptates ratione placeat quisquam doloribus, distinctio harum nam est error, molestiae perspiciatis optio obcaecati deleniti! Numquam quas labore repellat cum blanditiis. Excepturi ad est maxime impedit consectetur ullam a magni esse nostrum officiis. Quidem porro eaque quos distinctio nam necessitatibus nisi magnam doloribus aliquid tenetur sed officiis, hic, maiores praesentium est nostrum harum maxime quasi quae ab sequi exercitationem! Quibusdam placeat eius libero est voluptate labore eum quod nesciunt numquam. Quibusdam voluptates minus hic dolor accusantium rerum magni tenetur distinctio quae maiores architecto obcaecati commodi voluptate repudiandae doloremque delectus, amet vero at et corporis dolore qui id modi inventore. Sapiente molestiae enim impedit modi cupiditate libero aut mollitia possimus. Saepe debitis aliquid, maxime ut autem impedit doloremque corrupti, accusamus ipsa, asperiores id sint quia enim minus distinctio voluptatem quibusdam tempore at! Animi ducimus est doloremque amet! Fuga magnam voluptate accusantium voluptatibus soluta dolore eveniet, quos animi? Pariatur, odit. Reiciendis quia a provident et, ea ad vel quod architecto quos sunt aperiam maxime iusto harum rem id obcaecati perspiciatis corrupti consequatur quaerat eligendi. Ipsa alias ducimus magni soluta velit omnis impedit illum sapiente quo fugiat consectetur non, magnam porro eligendi unde aliquam fuga nobis veniam animi incidunt! Veniam excepturi alias odio. Doloribus, quos natus cum quia delectus praesentium vel quidem sit numquam mollitia possimus molestias quasi voluptas id officiis dolorum voluptate aspernatur modi enim at asperiores nobis fugiat culpa aliquam? Laboriosam voluptates non autem corporis facere eius nam et maiores quidem. Voluptatem eius rem hic numquam iste earum. Blanditiis voluptatibus molestiae ut harum eum illum eos, non debitis vitae aut ipsam laboriosam porro perspiciatis aspernatur impedit sapiente inventore et nesciunt, aliquid a amet voluptatem laudantium. Quas, obcaecati ratione. Suscipit illo cumque atque? Placeat ipsam dolore quo perferendis alias, voluptate incidunt voluptatibus laudantium veniam, quas vitae cupiditate porro quod omnis temporibus quibusdam, possimus cumque nobis quasi quia eum? Explicabo minus maxime voluptatibus aliquid voluptatem quibusdam amet non accusamus sit iure voluptatum ad odit nulla eligendi quia fugit unde, temporibus natus, quae iusto optio illum? Officiis, molestias porro doloribus expedita doloremque magni voluptates mollitia rerum aliquam non earum fugiat minima minus, dolorum ut nemo ipsam accusantium error excepturi alias sunt. Deleniti fuga nostrum maiores enim odit totam quis voluptatem expedita impedit, ipsa illo ducimus nobis asperiores. Nulla aspernatur magni necessitatibus id iusto maxime laudantium pariatur, quia, nesciunt dolore aperiam ab quis. Quia, eos molestias!
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0 mb-4">

                    <!-- Baris Ke-2 -->
                    <div class="row">
                        <!-- Data Pengirim -->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Layanan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" value="REG  " disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Berat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" value="1.0 Kg" disabled>
                                </div>
                            </div>
                        </div>

                        <!-- Data Penerima -->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Biaya Ekspedisi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" value="Rp. 100000" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Driver</label>
                                <div class="col-sm-9">
                                    <select class="form-control form-control-sm" id="jenis_layanan" name="jenis_layanan">
                                        <option selected="" disabled="">Pilih Driver</option>
                                        <option value="REG">Reguler</option>
                                        <option value="CRG">Cargo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <hr class="m-0">
                <!-- End of Modal Body -->

                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-confirm="Realy?|Apakah anda yakin melakukan perubahn ini?" data-confirm-yes="alert('Updated :)');">Save Changes</button>
                </div>
            </form>
        </div>
        <!-- End of Modal Content -->
    </div>
</div>