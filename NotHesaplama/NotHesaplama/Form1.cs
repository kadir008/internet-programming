using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace NotHesaplama
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            label4.Visible = false;
            label3.Visible = false;
            label5.Visible = false;
        }

        private void NotHesapla(object sender, EventArgs e)
        {
            double vize, final, ortalama;

            vize = Convert.ToDouble(numericUpDown1.Value);
            final = Convert.ToDouble(numericUpDown2.Value);
            ortalama = vize * 0.4 + final * 0.6;

            label3.Text = ortalama.ToString();

            if (ortalama > 0 && ortalama <= 40)
                label4.Text = "FF";
            else if (ortalama > 40 && ortalama <= 50)
                label4.Text = "FD";
            else if (ortalama > 50 && ortalama <= 60)
                label4.Text = "DC";
            else if (ortalama > 60 && ortalama <= 70)
                label4.Text = "CC";
            else if (ortalama > 70 && ortalama <= 80)
                label4.Text = "CB";
            else if (ortalama > 80 && ortalama <= 85)
                label4.Text = "BB";
            else if (ortalama > 85 && ortalama <= 90)
                label4.Text = "BA";
            else if (ortalama > 90 && ortalama <= 100)
                label4.Text = "AA";

            if (ortalama < 50 || final < 50)
            {
                label5.Text = "Kaldı";
                label4.ForeColor = Color.Red;
            }
            else
            {
                label5.Text = "Geçti";
                label4.ForeColor = Color.Green;
            }

            label4.Visible = true;
            label3.Visible = true;
            label5.Visible = true;
        }
    }
}
