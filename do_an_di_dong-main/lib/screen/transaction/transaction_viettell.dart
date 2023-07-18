import 'package:doan_didong/screen/transaction/transaction.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class TransactionViettel extends StatefulWidget {
  const TransactionViettel({super.key});

  @override
  State<TransactionViettel> createState() => _TransactionViettelState();
}

class _TransactionViettelState extends State<TransactionViettel> {
  @override
  Widget build(BuildContext context) {
    Size size = MediaQuery.of(context).size;
    return Scaffold(
      resizeToAvoidBottomInset: false,
      body: Stack(children: [
        Container(
          decoration: BoxDecoration(
            color: const Color(0xff7c94b6),
            image: const DecorationImage(
              image: AssetImage('images/background.png'),
              fit: BoxFit.cover,
            ),
          ),
        ),
        Column(
          children: [
            Row(
              mainAxisAlignment: MainAxisAlignment.start,
              children: [
                Container(
                  margin: EdgeInsets.only(top: size.height * 0.05),
                  child: TextButton(
                    onPressed: () {
                      Navigator.of(context).pushReplacement(
                        MaterialPageRoute<void>(
                          builder: (BuildContext context) => Transaction(),
                        ),
                      );
                    },
                    child: Image(
                      image: AssetImage('images/back.png'),
                      width: 30,
                      height: 30,
                    ),
                  ),
                ),
              ],
            ),
            Image(
              image: AssetImage('images/viettel.png'),
              height: 200,
              width: 200,
            ),
            Column(
              children: [
                inputField(
                  'So Seri',
                ),
                inputField(
                  'Ma The',
                ),
                loginButton('Nap The', context)
              ],
            )
          ],
        ),
      ]),
    );
  }
}

Widget loginButton(String title, BuildContext context) {
  return Padding(
    padding: const EdgeInsets.only(left: 30, right: 30),
    child: ElevatedButton(
      onPressed: () {
        // Navigator.push(
        //   context,
        //   MaterialPageRoute(builder: (context) => HomeTab()),
        // );
      },
      style: ElevatedButton.styleFrom(
        padding: const EdgeInsets.symmetric(horizontal: 40, vertical: 12),
        shape: const StadiumBorder(),
        primary: Colors.blue[900],
        elevation: 12, // đổ bóng
        shadowColor: Colors.black87,
      ),
      child: Text(
        title,
        textAlign: TextAlign.center,
        style: TextStyle(
          fontSize: 20,
          fontWeight: FontWeight.bold,
        ),
      ),
    ),
  );
}

Widget inputField(String hint) {
  return Padding(
    padding: const EdgeInsets.symmetric(horizontal: 36, vertical: 8),
    child: SizedBox(
      height: 50,
      child: Material(
        elevation: 8, // góc đổ bóng
        shadowColor: Color.fromARGB(221, 10, 9, 9),
        color: Colors.transparent,

        borderRadius: BorderRadius.circular(30), // bo tròn bóng
        child: TextField(
          textAlignVertical: TextAlignVertical.bottom, // gạch chân input
          decoration: InputDecoration(
            // tạo input

            border: OutlineInputBorder(
              borderRadius: BorderRadius.circular(30), // bo tròn
              borderSide: BorderSide.none, // bỏ đường viền
            ),
            filled: true,
            fillColor: Colors.white,
            hintText: hint, // hiển thị chữ
            //icon
          ),
        ),
      ),
    ),
  );
}
