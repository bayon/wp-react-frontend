import React, { Component } from 'react';
import './Post.css';

class Post extends Component {
    constructor(props) {
         
        super(props);
        this.state = {
          posts: [],
          configs:{
              apiURL:"http://localhost:8888/wp/wp-json/wp/v2/"
          }
        }
      }
      componentDidMount() {
        let postsURL = this.state.configs.apiURL+"posts";
        fetch(postsURL)
        .then(response => response.json())
        .then( response => {
             console.log(response);
              this.setState({
                posts: response
              });
              
        })
    }

    render () {
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
            <div className="posts">
            <h2>Posts:</h2>
             {posts}
              
            </div>
           
             
        )
    }

    
    
}

export default Post;
