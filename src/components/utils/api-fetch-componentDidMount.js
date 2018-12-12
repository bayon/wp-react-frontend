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