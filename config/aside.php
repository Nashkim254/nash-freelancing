<div class="col-sm-3" style="background-color:#f2f2f2;">
        <div class="row" id="aside">
            <div class="col-sm-12" id="events">
                <h4>News</h4>
                <?php
                   $result=mysqli_query($conn,"SELECT * FROM news ORDER BY news_id DESC LIMIT 0,5");
                   while($row=mysqli_fetch_assoc($result)){
                   $news_title=$row["news_title"];
                   $news_id=$row["news_id"];
                   echo "<a href='news.php?id=$news_id'><li>$news_title</li></a>";
                   }
                ?>
            </div>
            <div class="col-sm-12" id="events">
                <h4>Downloads</h4>
                <a target="_blank" href="documents/NashFreelancing_constitution.docx">Download Nash Freelancing Constitution.</a>
            </div>
            <div  class="col-sm-12" id="events">
                <h4>Upcoming Events</h4>
                <?php
                   $result=mysqli_query($conn,"SELECT * FROM events ORDER BY event_id DESC LIMIT 0,5");
                   while($row=mysqli_fetch_assoc($result)){
                   $event_title=$row["event_title"];
                   $event_id=$row["event_id"];
                   echo "<a href='events.php?id=$event_id'><li>$event_title</li></a>";
                   }
                ?>
            </div>
            <div class="col-sm-12" id="events">
                <h4>Important Dates</h4>
                <?php
                   $result=mysqli_query($conn,"SELECT * FROM dates ORDER BY date_id DESC LIMIT 0,5");
                   while($row=mysqli_fetch_assoc($result)){
                   $imp_date=$row["imp_date"];
                   $date_id=$row["date_id"];
                   echo "<a href='dates.php?id=$date_id'><li>$imp_date</li></a>";
                   }
                ?>
            </div>
        </div>
    </div>