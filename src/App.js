import React, { Component } from 'react';
import './App.css';

class App extends Component {
  constructor() {
    super();
    this.state = {
      posts: []
    }
  }
  componentDidMount() {
    let postsURL = "http://localhost:8888/wp/wp-json/wp/v2/posts";
    fetch(postsURL)
    .then(response => response.json())
    .then( response => {
         console.log(response);
          this.setState({
            posts: response
          });
          
    })
}
render() {
     
    let posts = this.state.posts.map((post,index) => {
        return(
            <div key={index} className="post">
            <h2>{post.title.rendered} </h2>
             
            <p dangerouslySetInnerHTML={{__html: post.content.rendered}} ></p>
            <p>{post.date} </p>
            </div>
        )
    })
    return (
        <div className="App">
            <h1>Posts</h1>
            <h3>In React from Wordpress Backend.</h3>
             {posts}
             <hr/>
             <p>to do:
               <ul>
                 <li>crud via rest api</li>
               </ul>
             </p>
        </div>
    )
}
}

export default App;
