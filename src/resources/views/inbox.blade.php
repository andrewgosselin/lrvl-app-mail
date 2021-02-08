@extends('layouts.app')
@section('styles')
<style>
    #sidebar {
        height: 100%;
        width: 15%;
        background-color: #99aab5;
        position: relative;
        overflow: hidden;
    }
    #sidebar .branding {
        text-align: center;
        padding: auto;
        height: 77px;
        position: relative;
    }
    #sidebar .list {
        height: 100%;
        background-color: #2c2f33;
        padding: 25px;
    }
    #main {
        height: 100%;
        width: 100%;
        background-color: grey;
        position: absolute;
        left: 15%;
        top: 0px;
    }
    #mailSidebar {
        height: 100%;
        width: 35%;
        background-color: white;
        
    }
    #mailSidebar .mailSearch {
        height: 75px;
        width: 100%;
        background-color: white;
        border-bottom: 2px solid lightgrey;
    }
    #mailSidebar .mailList {
        height: 100%;
        width: 100%;
        background-color: white;
        overflow-y: scroll;
        
    }
    #mailViewer {
        height: 100%;
        width: 100%;
        background-color: white;
        position: absolute;
        top: 0;
        left: 35%;
        padding: 25px;
        border-left: 2px solid lightgrey;
    }
        ol,
    ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: grid;
    grid-gap: 1rem;
    }
    li {
  display: grid;
  grid-template-columns: 0 1fr;
  grid-gap: 2.5em;
  align-items: start;
  font-size: 1.3rem;
  line-height: 1.25;
  color: rgba(255, 255, 255, 0.6);
}
li:hover {
  color: rgba(255, 255, 255, 0.8);
}
li .counter {
    position: absolute; right: 35px;
}
ul .active {
  color: rgb(255, 255, 255);
}
ul li::before {
  content: attr(data-icon);
  /* Make slightly larger than the li font-size
  but smaller than the li grid-gap */
  font-size: 1.25em;
}
.emailListItem {
    height: auto;
    border-bottom: 2px solid grey;
    overflow: hidden;
    position: relative
}
.emailListItem:hover {
    background-color: lightgrey;
    cursor: pointer;
}
.emailListItem .avatarContainer {
    width: 75px;
    height: 100%;
    background-color: black;
    position: absolute;
}
.emailListItem .text {
    padding-left: 85px;
}
.emailListItem .text .senderName {
    line-height: 10px;
    font-size: 15px
}
.emailListItem .text .timestamp {
    line-height: 10px;
    font-size: 15px;
    position: absolute;
    top: 0;
    right: 10px;
}
.emailListItem .text .subject {
    line-height: 19px;
    font-size: 19px;
    font-weight: 700;
}
.emailListItem .clickable {
    position: absolute;
    width: 100%;
    height: 100%;
}
</style>
@endsection
@section('content')
<div id="sidebar">
    <div class="branding">

    </div>
    <div class="list">
        <ul>
            <li class="active" data-icon="📪">
                Inbox
                <div class="counter">0</div>
            </li>
            <li data-icon="⚠️">
                Important
                <div class="counter">0</div>
            </li>
            <li data-icon="📤">
                Sent
                <div class="counter">0</div>
            </li>
            <li data-icon="📝">
                Drafts
                <div class="counter">0</div>
            </li>
            <li data-icon="🗑️">
                Trash
                <div class="counter">0</div>
            </li>
        </ul>
    </div>
</div>
<div id="main">
    <div id="mailSidebar">
        <div class="mailSearch">

        </div>
        <div class="mailList">
            <div class="emailListItem">
                <div class="avatarContainer"></div>
                <div class="text">
                    <p class="senderName">Andrew Gosselin</p>
                    <p class="timestamp">5 min ago</p>
                    <p class="subject">Test Subject</p>
                </div>
            </div>
            <div class="emailListItem">
                <div class="avatarContainer"></div>
                <div class="text">
                    <p class="senderName">Andrew Gosselin</p>
                    <p class="timestamp">5 min ago</p>
                    <p class="subject">Test Subject</p>
                </div>
            </div>
        </div>
    </div>
    <div id="mailViewer">
        This is where the email will be displayed
    </div>
</div>
@endsection
@section('scripts')
@endsection