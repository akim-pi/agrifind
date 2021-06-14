<?= $this->extend('/layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <!-- header -->

  <!-- <img class="" width="200px" src="/img/header/<?= $user['header']; ?>" alt="" style="object-fit:cover; width: 100%; height: 200px;"> -->

  <div class="row mt-5 mb-3">
    <div class="col-9">

      <!-- header card -->
      <div class="card mb-3">
        <img src="/img/header/<?= $user['header']; ?>" alt="" style="object-fit:cover; width: 100%; height: 200px;" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <!-- avatar -->
              <img class="mb-3 rounded-circle mx-4" width="200px" src="/img/avatar/<?= $user['avatar']; ?>" alt="" style="  width: 100px;
        height: 100px;
        background-position: center center;
        background-repeat: no-repeat;
        object-fit:cover;
        margin-top: -70px">
              <br>
            </div>
            <div class="col">
              <div class="float-end">
                <?php if ($user['cv']) : ?>
                  <a class="btn btn-primary" href="/docs/cv/<?= $user['cv'] ?>" target="_blank">CV</a>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="mx-3">
            <h2><?= $user['name']; ?></h2>

            <!-- availability -->
            <?php if ($user['availability'] == 'Available') : ?>
              <p class="badge bg-success" nowrap><?= $user['availability']; ?></p>
            <?php elseif (($user['availability'] == 'Unavailable')) : ?>
              <p class="badge bg-danger"><?= $user['availability']; ?></p>
            <?php elseif (($user['availability'] == 'Do Not Disturb')) : ?>
              <p class="badge bg-warning"><?= $user['availability']; ?></p>
            <?php endif; ?>

            <!-- Button trigger modal contact info-->
            <a type="button" class="mx-2" data-bs-toggle="modal" data-bs-target="#contactinfo">
              Contact info
            </a>

            <br>
            <a href="/follow/following">Following <?= count($following_count); ?></a> <a href="/follow"><span class="mx-2">Follower <?= count($follower_count); ?></span></a>


          </div>
        </div>
      </div>

      <div class="card mb-3">
      <div class="card-header">
          <h3 class="card-title mx-3 mt-2">Information</h3>
        </div>
        <div class="card-body mx-3">
          <div class="row">
            <div class="col">
              <b>Name</b> : <?= $user['name']; ?><br>
              <b>Email</b> : <?= $user['username']; ?>@apps.ipb.ac.id<br>
              <b>NIM</b> : <?= $user['nim']; ?><br>
              <b>Batch</b> : <?= $user['batch']; ?><br>
            </div>
            <div class="col">
              <b>Department</b> : <?= $user['department']; ?><br>
              <b>Faculty</b> : <?= $user['faculty']; ?><br>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <h3 class="card-title mx-3 mt-2">Skill</h3>
        </div>
        <div class="card-body mx-3">


          <div class="row">
            <table class="table align-middle table-fit">
              <thead>
                <!-- <col style="width: 10%;"> -->
                <col style="width: 20%;">
                <col style="width: 50%;">
                <tr class="table-dark">
                  <!-- <th scope="col">#</th>
                  <th scope="col">Skill</th>
                  <th scope="col">Level</th> -->
                </tr>
              </thead>

              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($skill as $s) : ?>

                  <tr>
                    <!-- <th scope="row"><?= $i++; ?></th> -->
                    <th scope="row"><?= $s['name']; ?></th>
                    <th scope="row">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?= $s['level'] * 10; ?>%;" aria-valuenow="<?= $s['level']; ?>" aria-valuemin="0" aria-valuemax="20"><?= $s['level']; ?></div>
                      </div>
                    </th>
                  </tr>

                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <h3 class="card-title  mx-3 mt-2">Achievement</h3>
        </div>
        <div class="card-body mx-3">

          <div class="row">
            <table class="table table-hover align-middle table-fit">
              <thead>
                <col style="width: 5%;">
                <col style="width: 15%;">
                <col style="width: 15%;">
                <col style="width: 15%;">
                <col style="width: 15%;">
                <col style="width: 15%;">
                <col style="width: 20%;">
                <tr class="table-dark">
                  <!-- <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Field</th>
                  <th scope="col">Rank</th>
                  <th scope="col">Organiser</th> -->
                </tr>
              </thead>

              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($achieve as $s) : ?>

                  <tr>
                    <th scope="row" data-bs-toggle="collapse" data-bs-target="#desc<?= $s['id']; ?>"><?= $i++; ?></th>
                    <td scope="row" data-bs-toggle="collapse" data-bs-target="#desc<?= $s['id']; ?>"><b><?= $s['name']; ?></b></td>
                    <td scope="row" data-bs-toggle="collapse" data-bs-target="#desc<?= $s['id']; ?>"><?= $s['field']; ?></td>
                    <td scope="row" data-bs-toggle="collapse" data-bs-target="#desc<?= $s['id']; ?>"><?= $s['rank']; ?></td>
                    <td scope="row" data-bs-toggle="collapse" data-bs-target="#desc<?= $s['id']; ?>"><?= $s['organiser']; ?></td>
                  </tr>

                  <?php if ($s['description'] != '') : ?>

                    <tr class="collapse" id="desc<?= $s['id']; ?>">
                      <td></td>
                      <td colspan="4" scope="row"><?= $s['description']; ?></td>
                    </tr>

                  <?php endif; ?>

                <?php endforeach; ?>

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>

    <!-- achievement board -->
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Achievement</h3>
          <p class="card-text">Life long goals</p>
        </div>
        <ul class="list-group list-group-flush">
          <?php $competition_rank = ["First", "Second", "Third", "Favorite", "Honorable Mention", "Participate", "Other"];
          $i = 0 ?>
          <?php foreach ($competition_rank as $c) : ?>
            <?php if ($rank[$i] != 0) : ?>
              <li class="list-group-item d-flex justify-content-between align-items-center"><?= $c; ?> <span class="badge bg-primary rounded-pill"><?= $rank[$i]; ?></span></li>
            <?php endif; ?>
            <?php $i++ ?>
          <?php endforeach; ?>
        </ul>
        <div class="card-body">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Contact -->
<div class="modal fade" id="contactinfo" tabindex="-1" aria-labelledby="contactinfoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactinfoLabel">Contact Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php $icon =        ['globe2', 'telephone-fill', 'envelope-fill', 'whatsapp', 'twitter', 'instagram', 'facebook', 'linkedin', 'reddit', 'github'] ?>
        <?php $contactName = ['website', 'phone', 'mail', 'whatsapp', 'twitter', 'instagram', 'facebook', 'linkedin', 'reddit', 'github'] ?>

        <div>
          <?php for ($i = 0; $i < count($icon); $i++) : ?>
            <ul class="list-group list-group-flush">
              <?php if ($contact[$contactName[$i]]) : ?>
                <li class="list-group-item"><i class="bi bi-<?= $icon[$i]; ?> mx-3"></i><?= $contact[$contactName[$i]]; ?></li>
              <?php endif; ?>
            </ul>
          <?php endfor; ?>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>