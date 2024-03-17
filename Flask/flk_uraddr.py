from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def uraddr():
    uraddr = request.environ['REMOTE_ADDR']
    urport = request.environ['REMOTE_PORT']
    headers = dict(request.headers)
    return render_template('uraddr.html',uraddr=uraddr,urport=urport,h=headers)

if __name__ == "__main__":
    app.run(debug=True,host='0.0.0.0',port=8888,threaded=True)
