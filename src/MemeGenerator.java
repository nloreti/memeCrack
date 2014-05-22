
import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.image.BufferedImage;
import java.io.File;
import java.lang.reflect.Field;
import java.nio.charset.Charset;
import java.util.Scanner;

import javax.imageio.ImageIO;

public class memeGenerator {

	public static void main(String[] args) throws Exception {
		System.setProperty("file.encoding","UTF-8");
		Field charset = Charset.class.getDeclaredField("defaultCharset");
		charset.setAccessible(true);
		charset.set(null,null);
		String questionarg = args[0];// "¿Cuál es la famosa";
		// String question_1 = args[1];//"Piramide realizada por los";
		// String question_2 = args[2];//"Egipcios en el siglo X?";
//		System.out.println(questionarg);
//		System.out.println("questionarg: " + questionarg);
//		System.out.println("questionarg: " + Base64.decode(questionarg));
//		System.out.println(java.net.URLDecoder.decode(questionarg, "ISO-8859-1"));
//		System.out.println(java.net.URLDecoder.decode(questionarg, "UTF-8"));

//		System.out.println("Bytes UTF8: " + bytes);
//		System.out.println("Bytes ISO: " + questionarg.getBytes("ISO-8859-1"));
		String question = new String(Base64.decode(questionarg),"UTF-8");
//		String questionarg = "%BFquiero+v%E9r+si+esto+anda+esto+anda+muy+bien+o+muy+m%E1l+%3F";
//		String question = java.net.URLDecoder.decode(questionarg, "ISO-8859-1");
//		System.out.println("Pregunta UTF8: " + question);
//		System.out.println("Pregunta ISO: " + new String(questionarg.getBytes("ISO-8859-1"), "UTF-8"));
		String question_0 = "";
		String question_1 = "";
		String question_2 = "";
		String string1 = new String(Base64.decode(args[1]),"UTF-8");// "Chino gay";
//		String string1 = "Chino gay";
		String string2 = new String(Base64.decode(args[2]),"UTF-8");// "Karpo gay";
//		String string2 =  "Karpo gay";
		String string3 = new String(Base64.decode(args[3]),"UTF-8");// "Chino maracaibo";
//		String string3 = "Chino maracaibo";
		String string4 = new String(Base64.decode(args[4]),"UTF-8");// "Karpo maracaibo";
//		String string4 = "Karpo maracaibo";
		String tipo_background = args[5];
//		String tipo_background = "historia";
		String outputName = args[6];
//		String outputName = "test";
		File file = new File(tipo_background+".png");
		final BufferedImage image = ImageIO.read(file);

		Graphics g = image.getGraphics();
		Font font = new Font("Arial", Font.PLAIN, 26);
		g.setFont(font);
		g.setColor(Color.GRAY);
		g.drawString(string1, (((35 - string1.length()) / 2) * 12 + 17), 455);
		g.drawString(string2, (((35 - string2.length()) / 2) * 12 + 17), 532);
		g.drawString(string3, (((35 - string3.length()) / 2) * 12 + 17), 606);
		g.setColor(Color.WHITE);
		g.drawString(string4, (((35 - string4.length()) / 2) * 12 + 17), 683);

		int questionLenght = question.length();
		if (questionLenght >= 60) {
			//System.out.println("RESP: " + question);
			question_0 = cutQuestion(question);
			question = question.substring(question_0.length(),
					question.length());
			//System.out.println("RESP: " + question);
			question_1 = cutQuestion(question);
			question = question.substring(question_1.length(),
					question.length());
			//System.out.println("RESP: " + question);
			question_2 = cutQuestion(question);
		} else if (questionLenght >= 30) {
			question_0 = cutQuestion(question);
			question = question.substring(question_0.length(),
					question.length());
			question_1 = cutQuestion(question);
		} else {
			question_0 = cutQuestion(question);
		}

		if (!question_0.isEmpty() && !question_1.isEmpty()
				&& !question_2.isEmpty()) {
			addText(g, question_0, getX(question_0), 210, 28);
			addText(g, question_1, getX(question_1), 247, 28);
			addText(g, question_2, getX(question_2), 285, 28);
		} else if (!question_0.isEmpty() && !question_1.isEmpty()) {
			addText(g, question_0, getX(question_0), 227, 28);
			addText(g, question_1, getX(question_1), 263, 28);
		} else {
			addText(g, question_0, getX(question_0), 250, 28);
		}

		g.dispose();
		ImageIO.write(image, "png", new File(outputName.concat(".png")));
	}

	private static String cutQuestion(String question) {
		String resp = "";
		if (question.length() <= 25) {
			resp = question;
		} else {
			Scanner in = new Scanner(question);
			do {
				resp += in.next() + " ";
				//System.out.println(resp);
			} while (resp.length() <= 25);
		}
		return resp;
	}

	public static int getX(String text) {
		return (((35 - text.length()) / 2) * 12 + 18);
	}

	public static Graphics addText(Graphics g, String text, int x, int y,
			int size) {
		g.setFont(new Font("Arial", Font.PLAIN, size));
		g.setColor(Color.GRAY);
		// get the visual center of the component.
		int centerX = x;
		int centerY = y;

		// get the bounds of the string to draw.
		//FontMetrics fontMetrics = g.getFontMetrics();
		//Rectangle stringBounds = fontMetrics.getStringBounds(text, g)
		//		.getBounds();

		// get the visual bounds of the text using a GlyphVector.
		//Font font1 = g.getFont();
		//FontRenderContext renderContext = ((Graphics2D) g)
		//		.getFontRenderContext();
		//GlyphVector glyphVector = font1.createGlyphVector(renderContext, text);
		//Rectangle visualBounds = glyphVector.getVisualBounds().getBounds();

		// calculate the lower left point at which to draw the string. note that
		// this we
		// give the graphics context the y corridinate at which we want the
		// baseline to
		// be placed. use the visual bounds height to center on in conjuction
		// with the
		// position returned in the visual bounds. the vertical position given
		// back in the
		// visualBounds is a negative offset from the basline of the text.
		int textX = centerX-20;// - stringBounds.width/2;
		int textY = centerY;// - visualBounds.height/2 - visualBounds.y;

		g.drawString(text, textX, textY);
		return g;
	}

}
