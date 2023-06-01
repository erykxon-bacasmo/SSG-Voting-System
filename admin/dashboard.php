<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include ('side_bar.php');?>
    </div>    
    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="font-weight: bold;">Dashboard</h3>
					
                </div>
				<?php 
					$count = $conn->query("SELECT COUNT(*) as total FROM `voters`")->fetch_array();
					$count1 =  $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Voted'")->fetch_array();
					$count2 = $conn->query("SELECT COUNT(*) as total FROM `voters` WHERE `status` = 'Unvoted'")->fetch_array();
					?>

                <a href="voters.php" class = "btn btn-primary btn-outline"><i class = "fa fa-users"></i> ALL Voters (<?php echo $count['total']?>)</a> &nbsp; &nbsp;
				<a href="voted.php" class = "btn btn-success btn-outline"><i class = "fa fa-check fa-large"></i> Voted(<?php echo $count1['total']?>)</a> &nbsp; &nbsp;
				<a href="unvoted.php" class = "btn btn-danger btn-outline"><i class = "fa fa-times fa-fw"></i> Unvoted(<?php echo $count2['total']?>) </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <?php include ('script.php');?>
                <br><br><br>
                <!-- chart sa dashboard -->
                <h3 class="page-header" style="font-size: 20px; font-weight: bold; margin: -15px 0px 0px 15px">Leaderboards</h3>
                <div class="chart">
                    <canvas class="chart1" id="myChart" style="">Please Fill Up Position</canvas><br><br>
                    <canvas class="chart2" id="myChart2" style=""></canvas><br><br>
                    <canvas class="chart3" id="myChart3" style=""></canvas><br><br>
                    <canvas class="chart4" id="myChart4" style=""></canvas><br><br>
                    <canvas class="chart5" id="myChart5" style=""></canvas><br><br>
                    <canvas class="chart6" id="myChart6" style=""></canvas><br><br>
                    <canvas class="chart7" id="myChart7" style=""></canvas><br><br>
                    <canvas class="chart8" id="myChart8" style=""></canvas><br><br>
                    <canvas class="chart9" id="myChart9" style=""></canvas><br><br>
                    <canvas class="chart10" id="myChart10" style=""></canvas><br><br>
                    <canvas class="chart11" id="myChart11" style=""></canvas><br><br>
                    <canvas class="chart12" id="myChart12" style=""></canvas><br><br>
                    <canvas class="chart13" id="myChart13" style=""></canvas><br><br>
                    <canvas class="chart14" id="myChart14" style=""></canvas><br><br>
                </div>
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'President'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="kahitano" value="<?php echo $num?>">
                    <input type="hidden" name="" id="kahitiba" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 
<!-- chart2 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for Internal Affairs'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart2" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart2_2" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 
                <!-- chart3 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Vice President for External Affairs'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart3" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart3_3" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 
                <!-- chart4 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Secretary'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart4" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart4_4" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 

                <!-- chart5 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Auditor'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];
                        
                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;
        
                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart5" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart5_5" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 

                <!-- chart6 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Treasurer'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart6" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart6_6" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 

                <!-- chart7 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'PIO'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart7" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart7_7" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 

                <!-- chart8 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Peace Officer'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart8" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart8_8" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 

                <!-- chart9 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Grade 12 Representative'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart9" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart9_9" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?>

                <!-- chart10 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Grade 11 Representative'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart10" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart10_10" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?>  

                <!-- chart11 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Grade 10 Representative'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart11" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart11_11" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?>  

                <!-- chart12 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Grade 9 Representative'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart12" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart12_12" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?> 

                <!-- chart13 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Grade 8 Representative'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart13" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart13_13" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?>   

                <!-- chart14 -->
                <?php
                require 'dbcon.php';
                    $query = $conn->query("SELECT * FROM candidate WHERE position = 'Grade 7 Representative'");
        
                    $fetch = $query->fetch_assoc()
                ?>
                <?php do{ ?>
                    <?php 
                        $candidate_id = $fetch['candidate_id'];

                        $query1 = "SELECT * FROM votes WHERE candidate_id = '$candidate_id'";
                        $list1 = $conn->query($query1);
                        $num = $list1->num_rows;

                        // echo $num;
                    ?>
                    <input type="hidden" name="" id="chart14" value="<?php echo $num?>">
                    <input type="hidden" name="" id="chart14_14" value="<?php echo $fetch['firstname']?>">
                    
                <?php }while( $fetch = $query->fetch_assoc()) ?>  
            </div>
            
        </div> 
<script>
    // pantawag sa vote result
    const result1 = document.querySelectorAll("#kahitano")
    const finalresult = []

    result1.forEach(function(e){
        finalresult.push(e.value)
    })


    // pantawag sa names para sa vote result
    const result2 = document.querySelectorAll("#kahitiba")
    const finalresult1 = []

    result2.forEach(function(e){
        finalresult1.push(e.value)
    })
    console.log(finalresult1)
    var xValues = finalresult1;
    var yValues = finalresult;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {

            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for President",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });
    // chart 2
        // pantawag sa vote result
    const result2_ = document.querySelectorAll("#chart2")
    const finalresult2_ = []

    result2_.forEach(function(e){
        finalresult2_.push(e.value)
    })


    // pantawag sa names para sa vote result
    const result2_2 = document.querySelectorAll("#chart2_2")
    const finalresult2_2 = []

    result2_2.forEach(function(e){
        finalresult2_2.push(e.value)
    })
    console.log(finalresult2_2)
    var xValues = finalresult2_2;
    var yValues = finalresult2_;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart2", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {

            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for VP for Internal Affairs",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });

    // chart 3
    // pantawag sa vote result
    const result3_ = document.querySelectorAll("#chart3")
    const finalresult3_ = []

    result3_.forEach(function(e){
        finalresult3_.push(e.value)
    })


    // pantawag sa names para sa vote result
    const result3_3 = document.querySelectorAll("#chart3_3")
    const finalresult3_3 = []

    result3_3.forEach(function(e){
        finalresult3_3.push(e.value)
    })
    console.log(finalresult3_3)
    var xValues = finalresult3_3;
    var yValues = finalresult3_;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart3", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {

            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for VP for External Affairs",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });
    // chart 4
    // pantawag sa vote result
    const result4_ = document.querySelectorAll("#chart4")
    const finalresult4_ = []

    result4_.forEach(function(e){
        finalresult4_.push(e.value)
    })


    // pantawag sa names para sa vote result
    const result4_4 = document.querySelectorAll("#chart4_4")
    const finalresult4_4 = []

    result4_4.forEach(function(e){
        finalresult4_4.push(e.value)
    })
    console.log(finalresult4_4)
    var xValues = finalresult4_4;
    var yValues = finalresult4_;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart4", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {

            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for Secretary",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });
    // chart 5
    // pantawag sa vote result
    const result5_ = document.querySelectorAll("#chart5")
    const finalresult5_ = []

    result5_.forEach(function(e){
        finalresult5_.push(e.value)
    })


    // pantawag sa names para sa vote result
    const result5_5 = document.querySelectorAll("#chart5_5")
    const finalresult5_5 = []

    result5_5.forEach(function(e){
        finalresult5_5.push(e.value)
    })
    console.log(finalresult5_5)
    var xValues = finalresult5_5;
    var yValues = finalresult5_;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart5", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for Auditor",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });
    // chart 6
    // pantawag sa vote result
    const result6_ = document.querySelectorAll("#chart6")
    const finalresult6_ = []

    result6_.forEach(function(e){
        finalresult6_.push(e.value)
    })


    // pantawag sa names para sa vote result
    const result6_6 = document.querySelectorAll("#chart6_6")
    const finalresult6_6 = []

    result6_6.forEach(function(e){
        finalresult6_6.push(e.value)
    })
    console.log(finalresult6_6)
    var xValues = finalresult6_6;
    var yValues = finalresult6_;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart6", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for Treasurer",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });

    // chart 7
    // pantawag sa vote result
    const result7_ = document.querySelectorAll("#chart7")
    const finalresult7_ = []

    result7_.forEach(function(e){
        finalresult7_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result7_7 = document.querySelectorAll("#chart7_7")
    const finalresult7_7 = []

    result7_7.forEach(function(e){
        finalresult7_7.push(e.value)
    })
    console.log(finalresult7_7)
    var xValues = finalresult7_7;
    var yValues = finalresult7_;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart7", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for PIO",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });

    // chart 8
    // pantawag sa vote result
    const result8_ = document.querySelectorAll("#chart8")
    const finalresult8_ = []

    result8_.forEach(function(e){
        finalresult8_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result8_8 = document.querySelectorAll("#chart8_8")
    const finalresult8_8 = []

    result8_8.forEach(function(e){
        finalresult8_8.push(e.value)
    })
    console.log(finalresult8_8)
    var xValues = finalresult8_8;
    var yValues = finalresult8_;
    var barColors = ["yellow", "blue", "green"];
    
    new Chart("myChart8", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for Peace Officer",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });

    // chart 9
    // pantawag sa vote result
    const result9_ = document.querySelectorAll("#chart9")
    const finalresult9_ = []

    result9_.forEach(function(e){
        finalresult9_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result9_9 = document.querySelectorAll("#chart9_9")
    const finalresult9_9 = []

    result9_9.forEach(function(e){
        finalresult9_9.push(e.value)
    })
    console.log(finalresult9_9)
    var xValues = finalresult9_9;
    var yValues = finalresult9_;
    var barColors = ["red", "blue", "green"];
    
    new Chart("myChart9", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for G12 Representative",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });

    // chart 10
    // pantawag sa vote result
    const result10_ = document.querySelectorAll("#chart10")
    const finalresult10_ = []

    result10_.forEach(function(e){
        finalresult10_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result10_10 = document.querySelectorAll("#chart10_10")
    const finalresult10_10 = []

    result10_10.forEach(function(e){
        finalresult10_10.push(e.value)
    })
    console.log(finalresult10_10)
    var xValues = finalresult10_10;
    var yValues = finalresult10_;
    var barColors = ["red", "blue", "green"];
    
    new Chart("myChart10", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for G11 Representative",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });
    // chart 11
    // pantawag sa vote result
    const result11_ = document.querySelectorAll("#chart11")
    const finalresult11_ = []

    result11_.forEach(function(e){
        finalresult11_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result11_11 = document.querySelectorAll("#chart11_11")
    const finalresult11_11 = []

    result11_11.forEach(function(e){
        finalresult11_11.push(e.value)
    })
    console.log(finalresult11_11)
    var xValues = finalresult11_11;
    var yValues = finalresult11_;
    var barColors = ["red", "blue", "green"];
    
    new Chart("myChart11", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for G10 Representative",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });
    // chart 12
    // pantawag sa vote result
    const result12_ = document.querySelectorAll("#chart12")
    const finalresult12_ = []

    result12_.forEach(function(e){
        finalresult12_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result12_12 = document.querySelectorAll("#chart12_12")
    const finalresult12_12 = []

    result12_12.forEach(function(e){
        finalresult12_12.push(e.value)
    })
    console.log(finalresult12_12)
    var xValues = finalresult12_12;
    var yValues = finalresult12_;
    var barColors = ["red", "blue", "green"];
    
    new Chart("myChart12", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for G9 Representative",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });

    // chart 13
    // pantawag sa vote result
    const result13_ = document.querySelectorAll("#chart13")
    const finalresult13_ = []

    result13_.forEach(function(e){
        finalresult13_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result13_13 = document.querySelectorAll("#chart13_13")
    const finalresult13_13 = []

    result13_13.forEach(function(e){
        finalresult13_13.push(e.value)
    })
    console.log(finalresult13_13)
    var xValues = finalresult13_13;
    var yValues = finalresult13_;
    var barColors = ["red", "blue", "green"];
    
    new Chart("myChart13", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for G8 Representative",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });

    // chart 14
    // pantawag sa vote result
    const result14_ = document.querySelectorAll("#chart14")
    const finalresult14_ = []

    result14_.forEach(function(e){
        finalresult14_.push(e.value)
    })

    // pantawag sa names para sa vote result
    const result14_14 = document.querySelectorAll("#chart14_14")
    const finalresult14_14 = []

    result14_14.forEach(function(e){
        finalresult14_14.push(e.value)
    })
    console.log(finalresult14_14)
    var xValues = finalresult14_14;
    var yValues = finalresult14_;
    var barColors = ["red", "blue", "green"];
    
    new Chart("myChart14", {
        type: "horizontalBar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Vote Result for G7 Representative",
                fontSize: 15,
                
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontSize: 13,
                        min: 0,
                        // max: 20, //input your desire maximum number for the bar graph
                    }
                }]

            }
        }
    });




    </script>
    <?php ?>

    <style>
        @media (min-width: 425px) {
            .btn-primary {
                margin-left: 15px;
            }
            .btn-primary, .btn-danger, .btn-success {
                font-size: 10px;
                width: 35%;
                max-width: 110px;
                padding: 20px;               
            }
            .chart1, .chart2, .chart3, .chart4, .chart5, .chart6, .chart7, .chart8, .chart9, .chart10, .chart11, .chart12, .chart13, .chart14{
            width: 100%; 
            max-width:600px; 

            }

            .chart {
                /* border: 1px solid black; */
                display: flex;
                flex-wrap: wrap;
                margin-right: 15px;
                margin-left: 15px;

            }
            .chart > canvas {
                border-bottom: 2px solid black;
                border-right: 2px solid black;
                margin: 15px;

            }


        }

        @media (min-width: 768px) {
            .btn-primary {
                margin-left: 15px;
            }
            .btn-primary, .btn-danger, .btn-success {
                font-size: 11px;
                width: 30%;
                max-width: 120px;
                padding: 20px;               
            }

            .chart1, .chart2, .chart3, .chart4, .chart5, .chart6, .chart7, .chart8, .chart9, .chart10, .chart11, .chart12, .chart13, .chart14{
            width: 100%; 
            max-width:600px; 

            }

            .chart {
                /* border: 1px solid black; */
                display: flex;
                flex-wrap: wrap;
                margin-right: 20px;
                margin-left: 20px;

            }
            .chart > canvas {
                border-bottom: 2px solid black;
                border-right: 2px solid black;
                margin: 15px;

            }

        }

        @media (min-width: 1024px) {
            .btn-primary, .btn-danger, .btn-success {
                font-size: 15px;
                width: 28%;
                max-width: 450px;
                padding: 15px;               
            }

            .chart1, .chart2, .chart3, .chart4, .chart5, .chart6, .chart7, .chart8, .chart9, .chart10, .chart11, .chart12, .chart13, .chart14{
            width: 100%; 
            max-width:600px; 

            }

            .chart {
                /* border: 1px solid black; */
                display: flex;
                flex-wrap: wrap;
                margin-right: 50px;
                margin-left: 50px;

            }
            .chart > canvas {
                border-bottom: 2px solid black;
                border-right: 2px solid black;
                margin: 15px;

            }
        
        }


        @media (min-width: 1366px) {

            .btn-primary {
                margin-left: 15px;
            }
            .btn-primary, .btn-danger, .btn-success {
                font-size: 15px;
                width: 30%;
                max-width: 500px;
                padding: 15px;               
            }

            .chart1, .chart2, .chart3, .chart4, .chart5, .chart6, .chart7, .chart8, .chart9, .chart10, .chart11, .chart12, .chart13, .chart14{

                width: 100%; 
                max-width:480px; 

            }

            .chart {
                /* border: 1px solid black; */
                display: flex;
                flex-wrap: wrap;
                margin-left: 5px;
                width: 100%;
            }
            .chart > canvas {
                border-bottom: 2px solid black;
                border-right: 2px solid black;
                margin: 20px;

            }
        }

        @media (min-width: 1440px) {
            .chart {
                /* border: 1px solid black; */
                display: flex;
                flex-wrap: wrap;
                margin-left: 15px;
                width: 100%;
            }
            .chart > canvas {
                border-bottom: 2px solid black;
                border-right: 2px solid black;
                margin: 30px;

            }
        
        }
    </style>    
  

</body>

</html>