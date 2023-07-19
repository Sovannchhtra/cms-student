<?php 
    include('header.php');
    $post_id = $_GET['id'];
?>
<main class="news-detail">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <?php get_new_banner($post_id); ?>
                    <!-- <div class="main-news">
                        <div class="thumbnail">
                            <img src="https://via.placeholder.com/730x415">
                        </div>
                        <div class="detail">
                            <h3 class="title">Kloppថា​ Liverpool ត្រូវ​ធ្វើ​បែប​នេះ​ ក្រោយ​អស់​ពី​ Mane</h3>
                            <div class="date">17/July/2022</div>
                            <div class="description">
                                លោក​ Jorgen Klopp អ្នកចាត់ការ​ក្លឹប​ Liverpool បាន​និយាយ​នៅ​ក្នុង​ថ្ងៃ​នេះ​ថា​ បន្ទាប់​ពី​ខ្សែ​ប្រយុទ្ធ​ Sadio Mane ចាកចេញ​ទៅ​កាន់​ Bayern Munich ក្រុម​របស់​លោក​ត្រូវ​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយសារ​ជា​ថ្មី​​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​លោក​។លោក​ Klopp បាន​និយាយ​ថា​៖" ពិត​ប្រាកដ​ណាស់​ យើង​មាន​ការ​ផ្លាស់​ប្ដូរ​តិច​តួច​នៅ​ក្នុង​ក្រុម​បន្ទាប់​ពី​យើង​បាន​បាត់​ Mane ចេញ​ទៅ​ដែល​ជា​កីឡាករ​ម្នាក់​ស្ថិត​ក្នុង​ជម្រើស​ដំបូង​ជា​និច្ច​នៅ​ក្នុង​ក្លឹប​យើង​អស់​រយៈពេល​៦ឆ្នាំ​ចុង​ក្រោយ​នេះ​។ យ៉ាង​ណា​ក្ដី​រឿង​ក្នុង​បាល់ទាត់​តែ​អញ្ចឹង​ឯង​។ យើង​មិន​អាច​នៅ​ជាមួយ​ក្រុម​តែ​មួយ​ជារៀង​រហូត​បាន​ទេ​ "។

                                លោក​បន្ត​ថា​៖" និយាយ​ទៅ​យើង​ត្រូវ​ផ្លាស់​ប្ដូរ​មួយ​ចំនួន​ ព្រោះ​ពេល​ Mane មក​ប្រាប់​យើង​ថាចង់​ទៅ​ធ្វើ​នូវ​ការ​ប្រកួត​ប្រជែង​បទពិសោធន៍​ថ្មីព្រោះ​តែ​កន្លង​មក​នេះ​នៅ​ Liverpool គឺ​គ្រប់គ្រាន់​សម្រាប់​គេ​ហើយ​នោះ​ អញ្ចឹង​ពួក​យើង​ក៏​យល់​ព្រម​ ហើយ​ក៏​ត្រូវ​ធ្វើ​តាម​ហ្នឹង​ផង​ដែរ​។ ដូច្នេះ​យើង​ក៏​ត្រូវការ​ពេល​គ្រប់​គ្រាន់​សម្រាប់​រៀប​ចំ​ធ្វើ​រឿង​ហ្នឹង​ផង​ដែរ​ ហើយ​យើង​ក៏​បាន​ធ្វើ​វា​ដូច​ដែល​មើល​ឃើញ​អញ្ចឹង​។ ហើយ​ឥឡូវ​នេះ​អ្វី​ដែល​ចាំបាច់​របស់​យើង​ គឺ​ត្រូវ​​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយ​សារជា​ថ្មី​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​យើង​នេះ​។ រឿង​នេះ​ជា​រឿង​ធម្មតា​ទៅ​ហើយ​ដែល​យើង​ត្រូវ​ធ្វើ​ជា​ប្រចាំ​ "។
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-4">
                    <div class="relate-news">
                        <h3 class="main-title">Related News</h3>
                        <?php get_related_new($post_id); get_viewer($post_id);?>
                        <!-- <figure>
                            <a href="">
                                <div class="thumbnail">
                                    <img src="https://via.placeholder.com/350x200" alt="">
                                </div>
                                <div class="detail">
                                    <h3 class="title">Kloppថា​ Liverpool ត្រូវ​ធ្វើ​បែប​នេះ​ ក្រោយ​អស់​ពី​ Mane</h3>
                                    <div class="date">17/July/2022</div>
                                    <div class="description">
                                        លោក​ Jorgen Klopp អ្នកចាត់ការ​ក្លឹប​ Liverpool បាន​និយាយ​នៅ​ក្នុង​ថ្ងៃ​នេះ​ថា​ បន្ទាប់​ពី​ខ្សែ​ប្រយុទ្ធ​ Sadio Mane ចាកចេញ​ទៅ​កាន់​ Bayern Munich ក្រុម​របស់​លោក​ត្រូវ​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយសារ​ជា​ថ្មី​​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​លោក​។
                                    </div>
                                </div>
                            </a>
                        </figure> -->
                        <!-- <figure>
                            <a href="">
                                <div class="thumbnail">
                                    <img src="https://via.placeholder.com/350x200" alt="">
                                </div>
                                <div class="detail">
                                    <h3 class="title">Kloppថា​ Liverpool ត្រូវ​ធ្វើ​បែប​នេះ​ ក្រោយ​អស់​ពី​ Mane</h3>
                                    <div class="date">17/July/2022</div>
                                    <div class="description">
                                        លោក​ Jorgen Klopp អ្នកចាត់ការ​ក្លឹប​ Liverpool បាន​និយាយ​នៅ​ក្នុង​ថ្ងៃ​នេះ​ថា​ បន្ទាប់​ពី​ខ្សែ​ប្រយុទ្ធ​ Sadio Mane ចាកចេញ​ទៅ​កាន់​ Bayern Munich ក្រុម​របស់​លោក​ត្រូវ​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយសារ​ជា​ថ្មី​​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​លោក​។
                                    </div>
                                </div>
                            </a>
                        </figure> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>