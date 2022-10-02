@extends('layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark">NPAN Target Indicator</h3>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Row start -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">UNDER NUTRITION: CURRENT STATUS AND TRENDS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">BASIC UNDERLYING CAUSES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">CARE PRACTICES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">HEALTH: SERVICES AND ENVIRONMENT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">FOOD SECURITY</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab1">
                                    <!--Group 1-->
                                    <div class="graph-group">
                                        <div class="row gutters">
                                            <div class="col-12">
                                                <div class="graph-group-heading">Levels of child undernutrition have been dropping in Bangladesh since 1996, but substantial challenges still remain</div>
                                                <hr />
                                                <div class="alert-custom alert-success" role="alert">
                                                    Measuring progress against the NPAN2 target and WHO public health ‘critical’ thresholds
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row gutters">
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header-custom">Underweight children <5 years</div>
                                                            <div class="card-body">
                                                                <div id="tab_1_1-1" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                            </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            BDHS 2011, BDHS 1996/97, BDHS 1999/2000
                                                            For 1996/97 and 1999/2000, WHO Algorithm was applied to convert from NCHS to WHO standards

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="card">
                                                        <div class="card-header-custom">Stunted children <5 years</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-2" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header-custom">Wasted children <5 years</div>
                                                                    <div class="card-body">
                                                                        <div id="tab_1_1-3" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 2-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">There is a high prevalence of all types of undernutrition throughout Bangladesh</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Sylhet is the worst affected Division in all three indicators of undernutrition
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-header-custom">Underweight (0-59 months)</div>
                                                                <div class="card-body">
                                                                    <img src="{{asset('template/pages/images/1_tab_1-1.jpg')}}" style="width:100%" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-header-custom">Stunting (0-59 months)</div>
                                                                <div class="card-body">
                                                                    <img src="{{asset('template/pages/images/1_tab_1-2.jpg')}}" style="width:100%" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-header-custom">Wasting (0-59 months)</div>
                                                                <div class="card-body">
                                                                    <img src="{{asset('template/pages/images/1_tab_1-3.jpg')}}" style="width:100%" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 3-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Nationally representative data (2014) show that overall indicators of economic growth and household wealth are not strongly related to improved nutrition</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                One in every four children is stunted even in the highest wealth quintile households
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-8">
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition in children under 5 years old by household wealth</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-7" style="min-width: 310px; height: 280px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li>While over half of the under 5 children in the poorest household wealth quintile are stunted, undernutrition is not restricted to the poor</li>
                                                                        <li>This situation reflects the underlying multi-dimensional causes of undernutrition</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 4-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Undernutrition is common among adult women in Bangladesh</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                There are marked regional variations and a strong relationship with food insecurity
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition is common among adult women in Bangladesh</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-8" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    Inadequate height = shorter than 145cm
                                                                    Low Body Mass Index = BMI (weight kgs/height m2) less than 18.5
                                                                    HFIAS: Household Food Insecurity Access Scale
                                                                    FDS: Food Deficit Scale
                                                                    FCS: Food Consumption Score
                                                                    DD: Diet Diversity
                                                                    FSNSP 2012 report

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition in adult woman by food consumption and diet diversity</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-9" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition in adult woman by food consumption and diet diversity</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-10" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 5-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Undernutrition is also common among adolescent girls in Bangladesh</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Similar regional variations but weaker relationship with food security
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition in adolescent girls (10-18 years)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-11" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    Inadequate height = shorter than 145cm
                                                                    Low Body Mass Index = BMI (weight kgs/height m2) less than 18.5
                                                                    HFIAS: Household Food Insecurity Access Scale
                                                                    FDS: Food Deficit Scale
                                                                    FCS: Food Consumption Score
                                                                    DD: Diet Diversity
                                                                    FSNSP 2012 report

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition in adolescent girls by food consumption and diet diversity</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-12" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition in adolescent girls by food consumption and diet diversity</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-13" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 6-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Although gradually decreasing, levels of anaemia still remain high: just over a quarter of all non-pregnant and non-lactating women are anaemic</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Anaemia among children and women represents an intergenerational threat to health
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-8">
                                                            <div class="card">
                                                                <div class="card-header-custom">Anaemia</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-14" style="min-width: 310px; height: 280px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <h6>Consequences of anaemia:</h6>
                                                                        <li>Reduced immunity</li>
                                                                        <li>Increased risk of maternal mortality</li>
                                                                        <li>Increased risk of perinatal mortality</li>
                                                                        <li>Intrauterine growth retardation</li>
                                                                        <li>Premature births</li>
                                                                        <li>Reduced cognitive development</li>
                                                                        <li>Reduced psychomotor development</li>
                                                                        <li>Reduced ability to concentrate</li>
                                                                        <li>Reduced scholastic performance</li>
                                                                        <li>Fatigue and reduced productivity</li>
                                                                        <li>Increased economic burden</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 7-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Iodine deficiency remains a serious problem despite the existence of mandatory Universal Salt Iodization and high usage of Iodized salt</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                4 in 10 school-aged child are iodine deficient. 57% of households use adequately iodized salt
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Prevalence of Iodine Deficiency</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-15" style="min-width: 310px; height: 250px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Coverage of households with equately iodized salt</div>
                                                                <div class="card-body">
                                                                    <div id="tab_1_1-16" style="min-width: 310px; height: 250px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab1">
                                                <!--Group 1-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Are economic growth and poverty reduction related to undernutrition?</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Poverty and stunting have reduced similarly but not as rapidly as economic growth
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div id="tab_2_2-1" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    Bangladesh Demographic and Health Survey (BDHS)
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 2-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Eliminating child marriage is a priority and there has been some reduction</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                But over half of all women in rural areas are married before their 18th birthday
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Percentage of female teenage (15-19 years) married population by administrative divisions 2011</div>
                                                                <div class="card-body">
                                                                    <div id="tab_2_1-2" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    Child Equity Atlas: BBS-BIDS-UNICEF 2013<br />
                                                                    BDHS 2011
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Woman age 20-24 years who were first married before age 18, and,15 years old</div>
                                                                <div class="card-body">
                                                                    <div id="tab_2_1-3" style="min-width: 310px; height: 290px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5>Marriage before the age of 18 is prohibited by law</h5>
                                                                    <h6>It is also a violation of children’s and women's rights:</h6>
                                                                    <ul>
                                                                        <li>Convention on the Rights of the Child, CRC</li>
                                                                        <li>Convention of Elimination of all Forms of Discrimination Against Women, CEDAW</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 3-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Women tend to marry later if they continue education into secondary level</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Child marriage exists across the country and is higher in rural areas
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Median age of first marriage of woman of age 20-24 based on education attainment (2014)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_2_1-4" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Median age of first marriage of woman of age 20-24</div>
                                                                <div class="card-body">
                                                                    <div id="tab_2_1-5" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 4-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Levels of mother’s education are associated with levels of undernutrition</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Childhood stunting and wasting reduce significantly with increasing levels of mother’s education
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Mother's education and child undernutrition, 2014</div>
                                                                <div class="card-body">
                                                                    <div id="tab_2_2-6" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    BDHS 2011<br />
                                                                    Child Equity Atlas: BBS-BIDS-UNICEF 2013
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Educational attainment of married and unmarried young woman in Bangladesh, 2011 </div>
                                                                <div class="card-body">
                                                                    <div id="tab_2_2-7" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="contact-tab1">
                                                <!--Group 9-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Overall, rates for exclusive breastfeeding have risen but early initiation of breastfeeding has not changed significantly</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                By 4-5 months old, only just over a third of children are still exclusively breastfed
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Excusive breastfeeding</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-1" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-header-custom">Initiation of breastfeeding/ 1hour of birth</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-2" style="min-width: 310px; height: 230px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Breastfeeding stutus of 4-5 months old children in 2014</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-3" style="min-width: 310px; height: 420px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 10-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Mother’s education is associated with infant and young child feeding practices</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                The relationship is strongest for proper complementary feeding practices
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Median duration of EBF in months and mother's education (2014)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-4" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Proper complementary feeding for children 6-23 months education (2014)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-5" style="min-width: 310px; height: 300px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 11-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">About half of all children do not receive complementary foods at the right time</div>
                                                            <hr />
                                                            <div class="alert-custom alert-primary" role="alert">
                                                                15% of children receive complementary foods too early and nearly 40% start too late
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Complemantry feeding practice (Children 6-23 months old)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-6" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Complemantry feeding practice (Children 6-23 months old)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-7" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 12-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Levels of child undernutrition are strongly related to IYCF practices</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Geographical comparison highlights this relationship
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">IYCF practice and stunting</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-8" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">IYCF practice and wasting</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-9" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">About half of all children do not receive complementary foods at the right time</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                15% of children receive complementary foods too early and nearly 40% start too late
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Complemantry feeding practice (Children 6-23 months old)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-10" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Complemantry feeding practice (Children 6-23 months old)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_3_3-11" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="contact-tab1">
                                                <!--Group 1-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Levels of maternal undernutrition are decreasing slightly but still remain high</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                The same pattern applies to antenatal care coverage
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Meternal undernutrition (15-49 years ever married woman)</div>
                                                                <div class="card-body">
                                                                    <div id="tab_4_4-1" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">ANC Coverage</div>
                                                                <div class="card-body">
                                                                    <div id="tab_4_4-2" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 2-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">A quarter of all pregnant women are undernourished (using MUAC)</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                There are some geographical variations
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Woman malnourished by trimester and pregnancy status</div>
                                                                <div class="card-body">
                                                                    <div id="tab_4_4-3" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Undernutrition among pregnant woman</div>
                                                                <div class="card-body">
                                                                    <div id="tab_4_4-4" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 3-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Safe drinking water and sanitation</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Population with access to improved sanitation is improving, particularly in rural areas
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <ul>
                                                                        <li>Access to an improved source of drinking water is universal (99%)</li>
                                                                        <li>Most common sources of drinking water are tube well or borehole</li>
                                                                        <li>For 71% of households, drinking water is within the premises</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Population with access to improved, not shared, sanitation facilities</div>
                                                                <div class="card-body">
                                                                    <div id="tab_4_4-5" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="contact-tab1">
                                                <!--Group 1-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Poor and borderline food consumption levels are widespread across the country</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                But the relationship with undernutrition is weak
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-header-custom">Poor or borderline food consumption</div>
                                                                <div class="card-body">
                                                                    <img src="{{asset('template/pages/images/1_tab_5-1.jpg')}}" style="width:100%" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-header-custom">Stunting (0-59 months) Chronic Malnutrition</div>
                                                                <div class="card-body">
                                                                    <img src="{{asset('template/pages/images/1_tab_5-2.jpg')}}" style="width:100%" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="card">
                                                                <div class="card-header-custom">Wasting (0-59 months) Acute Malnutrition</div>
                                                                <div class="card-body">
                                                                    <img src="{{asset('template/pages/images/1_tab_5-3.jpg')}}" style="width:100%" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 2-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Over half of all households are food insecure, up to nearly 60% in rural areas</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                There is a strong relationship with stunting across Divisions
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-header-custom">HFIAS and Stunting</div>
                                                                <div class="card-body">
                                                                    <div id="tab_5_5-2" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Group 3-->
                                                <div class="graph-group">
                                                    <div class="row gutters">
                                                        <div class="col-12">
                                                            <div class="graph-group-heading">Household food insecurity drops with income but even the wealthiest quintile has significant food insecurity</div>
                                                            <hr />
                                                            <div class="alert-custom alert-success" role="alert">
                                                                Food insecure households have more stunted children
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">HFIAS and stunting according to household wealth</div>
                                                                <div class="card-body">
                                                                    <div id="tab_5_5-3" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card">
                                                                <div class="card-header-custom">Household food insicurity and stunting</div>
                                                                <div class="card-body">
                                                                    <div id="tab_5_5-4" style="min-width: 310px; height: 430px; margin: 0 auto"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
           
            @include('shared.js_links')
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type='text/javascript' src='http://www.google.com/jsapi'></script>
            <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCAnl32vaikM_PoAUQOlbKzxVRYCi3IckE" async="" defer="defer"></script>
            <script type="text/javascript">
                google.charts.load('current', {
                    packages: ['corechart']
                });
            </script>
            
            @include('chart_scripts.high_chart_tab_1')
            @include('chart_scripts.high_chart_tab_2')
            @include('chart_scripts.high_chart_tab_3')
            @include('chart_scripts.high_chart_tab_4')
            @include('chart_scripts.high_chart_tab_5')
            @include('chart_scripts.geo_chart')
            @endsection('content')
        
            