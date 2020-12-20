<div class="container-banggia" id="banggia" style="height: 617px; padding-top: 80px;">
    <h1 style="color: rgb(226, 25, 25); text-align: center;"><strong>Bảng giá từng hãng xe</strong></h1>
    <div class="bd-example bd-example-tabs" style="padding-top: 20px;">
        <nav>
            <div class="nav nav-pills" id="nav-tab" role="tablist">
                <a class="nav-link" id="nav-lamborghini" data-toggle="tab" href="#lamborghini">Lamborghini</a>
                <a class="nav-link" id="nav-ferrari" data-toggle="tab" href="#ferrari">Ferrari</a>
                <a class="nav-link" id="nav-koenigsegg" data-toggle="tab" href="#koenigsegg">Koenigsegg</a>
                <a class="nav-link" id="nav-maybach" data-toggle="tab" href="#maybach">Maybach</a>
                <a class="nav-link" id="nav-bentley" data-toggle="tab" href="#bentley">Bentley</a>
                <a class="nav-link" id="nav-astonmartin" data-toggle="tab" href="#astonmartin">Aston Martin</a>
                <a class="nav-link" id="nav-bugatti" data-toggle="tab" href="#bugatti">Bugatti</a>
                <a class="nav-link" id="nav-landrover" data-toggle="tab" href="#landrover">Land-Rover</a>
                <a class="nav-link" id="nav-mclaren" data-toggle="tab" href="#mclaren">Mclaren</a>
                <a class="nav-link" id="nav-pagani" data-toggle="tab" href="#pagani">Pagani</a>
                <a class="nav-link" id="nav-porsche" data-toggle="tab" href="#porsche">Porsche</a>
                <a class="nav-link" id="nav-rollsroyce" data-toggle="tab" href="#rollsroyce">Rolls-Royce</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="lamborghini" role="tabpanel" aria-labelledby="nav-lamborghini">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include('controllers/xe.php');
                                $xe = new xe();

                                $id_xe = 'lam';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ferrari" role="tabpanel" aria-labelledby="nav-ferrari">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'fer';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="koenigsegg" role="tabpanel" aria-labelledby="nav-koenigsegg">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'koe';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="maybach" role="tabpanel" aria-labelledby="nav-maybach">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'may';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bentley" role="tabpanel" aria-labelledby="nav-bentley">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'ben';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="astonmartin" role="tabpanel" aria-labelledby="nav-astonmartin">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'ast';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bugatti" role="tabpanel" aria-labelledby="nav-bugatti">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'bug';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                    
            <div class="tab-pane fade" id="landrover" role="tabpanel" aria-labelledby="nav-landrover">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'lan';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mclaren" role="tabpanel" aria-labelledby="nav-mclaren">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'mcl';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pagani" role="tabpanel" aria-labelledby="nav-pagani">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'pag';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="porsche" role="tabpanel" aria-labelledby="nav-porsche">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'por';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="rollsroyce" role="tabpanel" aria-labelledby="nav-rollsroyce">
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'rol';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>