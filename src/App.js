import React, { Component } from 'react';
import './App.css';
import Post from './components/themes/theme-one/Post'

class App extends Component {
   
  
render() {
  
  return (
      <div className="App">
          <h1>WP</h1>
          <h3>React Frontend with Wordpress Backend.</h3>
          <p>to do:</p>
            <ul>
              <li>crud via rest api</li>
              <li>files like wp</li>
              <li>CI/CD</li>
              <li>npm run build</li>
              <li>SASS</li>
              <li>check live</li>
              <li>host wp on AWS: https://aws.amazon.com/getting-started/tutorials/launch-a-wordpress-website/</li>
            </ul>
            <hr/>
           <Post  ></Post>
          
         
          
      </div>
  )
}
}

export default App;
