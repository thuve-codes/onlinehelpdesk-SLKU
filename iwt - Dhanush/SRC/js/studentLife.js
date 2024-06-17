alert("Welcome to Student Life Page");

function loadData(data)
{
    if(data=="btn1")
    {   
        document.getElementById("img1").src="images/graduateimg.webp";
        document.getElementById("picheading").innerHTML="Graduation Ceremony";
        document.getElementById("para1").innerHTML="<b>This picture is clicked on the graduation ceremony on the campus auditorium. The graduation ceremony unfolds on a sprawling green lawn adorned with vibrant flowers,under cerulean sky. The sound of applause fills the air as each garduate steps forward to receive their diploma, their faces radiant with accomplishment. This is very special because we invited a Software engineer who is an old student of our SLKU.</b>";
    }
    else if(data=="btn2")
    {
        document.getElementById("img1").src="images/stdlife fday.jpg";
        document.getElementById("picheading").innerHTML="Freshers Day";
        document.getElementById("para1").innerHTML="<b>In the heart of bustling campus, vibrant banners flutters in the breeze,announcing the eagerly anticipated Freshers Day festivities. In the picture the students are wearing colourful costumes and showing their talents to the judges.  Food stalls are being set near the ground and outside of every department building. New friendships are forged, and memories are made, this is a begining of an unforgettable journey</b>";
    }
    else if(data=="btn3")
    {
        document.getElementById("img1").src="images/club.jpg";
        document.getElementById("picheading").innerHTML="Club fair";
        document.getElementById("para1").innerHTML="<b>This picture shows the the club fair is in full swing, with the students bustling around vibrant stalls. Eaach stall represents a unique club, offering a glimpse into the diversity range of activities that is available on the campus. Excited cheers and friendly banter fill the air as students cpmpete in virtualbattles and multiplayer games. The creativity of every individual is showcased in this club activity program.</b>";
    }
    else
    {
        alert("Invalid!");
    }
}

