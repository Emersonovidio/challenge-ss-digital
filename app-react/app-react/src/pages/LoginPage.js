import React from "react";

class LoginPage extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      username: "",
      password: "",
    };
  }

  sendLogin = (event) => {
    event.preventDefault();
    const { username, password } = this.state;
    console.log("user", username);
  };

  render() {
    return (
      <div className="container d-flex justify-content-center">
        <div className="card mt-5 w-50">
          <div className="card-body">
            <form onSubmit={this.sendLogin}>
              <div className="d-flex gap-3">
                <div className="form-group w-50">
                  <label htmlFor="nickName">Usuário</label>
                  <input
                    type="text"
                    className="form-control"
                    value={this.state.username}
                    onChange={(e) =>
                      this.setState({ username: e.target.value })
                    }
                    id="nickName"
                    placeholder="Usuário"
                  />
                </div>
              </div>
              <div className="form-group w-50">
                <label htmlFor="password">Senha</label>
                <input
                  type="password"
                  className="form-control"
                  value={this.state.password}
                  onChange={(e) => this.setState({ password: e.target.value })}
                  id="password"
                  placeholder="Senha"
                />
              </div>
              <button
                type="submit"
                className="btn btn-primary btn-lg w-100 mt-3"
              >
                Entrar
              </button>
            </form>
          </div>
        </div>
      </div>
    );
  }
}

export default LoginPage;
